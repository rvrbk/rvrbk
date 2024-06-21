import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import cheerio from 'cheerio';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const directoryPath = path.join(__dirname, 'src/pages');
const outputPath = path.join(__dirname, 'public/searchify.json');

function walkDir(dir, filelist = []) {
  const files = fs.readdirSync(dir);
  files.forEach(file => {
    const filePath = path.join(dir, file);
    if (fs.statSync(filePath).isDirectory()) {
      filelist = walkDir(filePath, filelist);
    } else {
      filelist.push(filePath.replace(__dirname + path.sep, ''));
    }
  });
  return filelist;
}

function extractMetaTags(filePath) {
  try {
    const content = fs.readFileSync(filePath, 'utf8');
    const $ = cheerio.load(content);
    const metaTags = [];
    $('meta').each((_, element) => {
      const attrs = {};
      Object.keys(element.attribs).forEach(attr => {
        attrs[attr] = element.attribs[attr];
      });
      metaTags.push(attrs);
    });
    $('title').each((_, element) => {
      metaTags.push({
        title: element.children[0].data
      });
    });
    return metaTags;
  } catch (error) {
    console.error(`Error reading file ${filePath}:`, error);
    return [];
  }
}

const fileTree = walkDir(directoryPath).map(file => {
  const page = path.basename(file, path.extname(file));
  const fullPath = path.join(__dirname, file);
  const metas = path.extname(fullPath) === '.astro' ? extractMetaTags(fullPath) : [];
  return { page, metas };
});

fs.writeFileSync(outputPath, JSON.stringify(fileTree, null, 2));

console.log(`File tree with meta tags saved to ${outputPath}`);

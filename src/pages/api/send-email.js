import nodemailer from 'nodemailer';

export async function POST({ request }) {
    const { email, name, message, honeypot } = await request.json();  

    if(honeypot === '') {
      try { 
        let transporter = nodemailer.createTransport({
            service: 'gmail',
            auth: {
                user: process.env.GMAIL_USER,
                pass: process.env.GMAIL_PASSWORD,
            },
        });

        let mailOptions = {
            from: email,
            to: process.env.GMAIL_USER,
            subject: `Mail from rvrbk.dev - ${name}`,
            text: message,
        };

        await transporter.sendMail(mailOptions);

        return new Response(JSON.stringify({ success: true, message: 'Email sent successfully' }), {
            status: 200,
            headers: { 'Content-Type': 'application/json' },
        });
      } catch (error) {
          return new Response(JSON.stringify({ error: error.message }), {
              status: 500,
              headers: { 'Content-Type': 'application/json' },
          });
      }
    }
    else {
      return new Response(JSON.stringify({ success: true, message: 'Email sent not successfully' }), {
        status: 200,
        headers: { 'Content-Type': 'application/json' },
    });
  }
}

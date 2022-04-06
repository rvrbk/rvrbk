import { ToggleTree } from 'toggletree';
import { Foarm } from './footer/Foarm';

const toggletree = new ToggleTree(document.querySelector('.side > nav'), {
    iconSelector: '.material-icons',
    iconCollapsed: 'arrow_right',
    iconVisible: 'arrow_drop_down'
});

const foarm = new Foarm(document.querySelector('.contact'));
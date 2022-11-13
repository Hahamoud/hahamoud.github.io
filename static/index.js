import { ToolbarManager } from './modules/toolbar-maneger.js';
import { CardFlipper } from './modules/flip-card.js';


const toolbarManager = new ToolbarManager('raph-navbar', 'content', 'raph-socials')
const cardFlipper = new CardFlipper();
toolbarManager.listen()
cardFlipper.listen()
import {detectionCollision} from './collisionDetection.js'
export default class QueBrick{
  constructor(game, position){
    this.image = document.getElementById("queBrick");
    this.game = game;

    this.position = position;
    
    this.width = 80;
    this.height = 24;

    this.markedForDeletion = false;
  }
  update(){
    if(detectionCollision(this.game.ball, this)){
      this.game.ball.speed.y = -this.game.ball.speed.y;
      
      this.markedForDeletion = true;
      this.game.togglePause();
      this.game.toggleQuestion();
      
     
      //que goes here
    }
  }
  draw(ctx){
    ctx.drawImage(
      this.image, 
      this.position.x, 
      this.position.y, 
      this.width, 
      this.height);
  }
}
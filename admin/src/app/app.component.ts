import { Component } from '@angular/core';
import { Entrada } from './models/entrada';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  entradaArray: Entrada[]=[
    {id:1 , title: "Primera entrada", subtitle: "subtitlo de la entrada", description: "lorem ipsum", photo: "img/primera.jpg", auth: "Admin"},
    {id:2 , title: "Segunda entrada", subtitle: "subtitlo de la entrada2", description: "lorem ipsum2", photo: "img/segunda.jpg", auth: "Admin"},
    {id:3 , title: "Tercera entrada", subtitle: "subtitlo de la entrada3", description: "lorem ipsum3", photo: "img/tercera.jpg", auth: "Admin"},
  ];

  selectedEntrada: Entrada = new Entrada();
  openForEdit( entrada: Entrada){
    this.selectedEntrada = entrada;
  }

  addOrEdit(){

    if(this.selectedEntrada.id === 0){
   
      this.selectedEntrada.id = this.entradaArray.length + 1;
      this.entradaArray.push(this.selectedEntrada);
    }

    this.selectedEntrada = new Entrada;
  }
  delete(){
    if(confirm('Estas seguro de querer eliminarlo?')){
      this.entradaArray = this.entradaArray.filter(x => x != this.selectedEntrada);
      this.selectedEntrada = new Entrada();
    }
  }


}

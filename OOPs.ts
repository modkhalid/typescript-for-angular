class Point{
    private x:number;
    private y:number;
    draw(){
        console.log('('+this.x+" , "+this.y+")");
    }

    getData(){
        return this.x+" "+this.y
    }
    constructor(x?:number,y?:number){
        this.x=x;
        this.y=y;
    }
    set X(value){
        this.x=value;
    }
    get X(){
        return this.x;
    }
    // sayHi(){
    //     console.log("hi this is test")
    // }
    sayHi(str?:string){
        if(typeof str==="string"){
            console.log("hi this is test"+str);
        }else{
            console.log("hi this is test");
        }
        
    }
}

let P=new Point();
// P.x=78;
// P.y=789;
P.draw();
P.sayHi();
P.sayHi("khalid");
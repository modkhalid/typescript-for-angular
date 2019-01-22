interface Person{
    name:string,
    age:number,
    location:string,
    toString:()=>void
}

let customer:Person={
    name:"khalid",
    age:45,
    location:"khora colony ghaziabad",
    toString:()=>{
        console.log(this.name+" "+this.age);
    }
}
console.log(typeof(customer));
let drow=(p:Person)=>{
    console.log(p.name+" "+p.age+""+ p.location);
    p.toString();
}
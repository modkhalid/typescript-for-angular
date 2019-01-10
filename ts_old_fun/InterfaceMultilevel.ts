interface person{
	name:string,
	age:number|number[]
}

var mod:person={
	name:"khalid",
	age:[5,7,8,9]

}


// multilevel Interface is an example of multileve inheritence
interface student extends person{
	clas:string,
	getData:()=>string|number|string|(()=>number)
}

var wasim:student={
	name:"anas",
	age:45,
	clas:"12th",
	getData:():string=>{
		return "modkhalid"
	}
}

interface array{
	[index:number]:string
}


var list:array;
list[0]="modkhalid";
list[1]=12 //willl show an error because 12 is integer but we declare array value is string
list['mod']="khalid";//will also how an eror


interface newarray{
	[index:string]:number
}
var modarray:newarray;
modarray['john']=45
modarray[45]=12
modarray['anas']="45"

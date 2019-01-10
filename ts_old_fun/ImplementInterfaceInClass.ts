interface interest{
	inumber:number,
	roi:number,
	expiryData:string
}
class acount implements interest{
	
	inumber:number
	roi:number
	expiryData:string
	name:string
	dob:string
	balance:number
	constructor(a,b,c,d,e,f){
		this.inumber=a
		this.roi=b
		this.expiryData=c
		this.name=d
		this.dob=e
		this.balance=f
	}
	
}
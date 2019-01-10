class car{
    engine: string
    constructor(engine:string) {
        this.engine=engine
    }
    static carnumber: number = 12;
    
    
    getEngineName():string{
        return this.engine;
    }

    getAge(): number{
        return 12;
    }
    phoneNumber: number = 7845612
    age =()=>{        
    }
   
}


// where we have to write return type and keyword function
 interface khalid{
        getAge:string|(()=>string)
}


function khalid():number{
    return 1;
}

var mod = ():string => {
    return "hello world";
}
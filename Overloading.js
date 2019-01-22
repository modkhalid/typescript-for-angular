var Employee = /** @class */ (function () {
    function Employee() {
    }
    return Employee;
}());
//function getEmployee(name: string): Employee;                 //Error - Conflict with Overload 2
//Implement the function
function getEmployee(paramOne, paramTwo) {
    var employee;
    if (typeof paramOne === 'number') {
        //Logic for overload 1
    }
    else if (typeof paramTwo != 'undefined') {
        //Logic for overload 3
    }
    else {
        //Logic for overload 2
    }
    return employee;
}

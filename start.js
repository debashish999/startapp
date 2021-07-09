

console.log('hello world');
class person{
    constructor(name,location){
        this.name = name;
        this.location = location;
    }
    fullname(){
        return this.name + '' + this.location;

    }
}
const person1 = new person('deb','budap');

console.log(person1.fullname());
//Asynchronus
setTimeout(()=>{
    console.log('asynchrnous',5000);
})

// const gettodos = (resource) =>{
// return new Promise((resolve,reject)=>{

//     const request = new XMLHttpRequest();
//     request.addEventListener('readystatechange',()=>{
//         if(request.readyState === 4 && request.status === 200){
//             const data = JSON.parse(request.responseText);
//             resolve(data)
//         }
//         else if(request.readyState ===4){
//             reject('could not fetch the data');

//         }
//     });
    


//     request.open('GET', resource);
//     request.send();
// });

// };


// gettodos('https://jsonplaceholder.typicode.com/todos/1').then(data=>{
//     console.log(data);
// }).catch(err=>{
//     console.log(err);
// });


// console.log(1);
// console.log(2);





// MyDisplayer = (value =>
//     console.log(value) );



// function getFile(callback) {
//         let request = new XMLHttpRequest();
//         request.open('GET','https://jsonplaceholder.typicode.com/todos/1');
//         request.send();
//         request.onload = function(){
//             if (request.status ===200){
//                 callback(request.responseText);
//             }
//             else{
//                 callback('Error: '+ request.status);
//             }
//         }
    
// }

// getFile(MyDisplayer);

//


    let mypromise = new Promise(function (resolve,reject) {
        let request = new XMLHttpRequest();
        request.open('GET','https://jsonplaceholder.typicode.com/todos/1');
        request.send();
        request.onload = function() {
            if (request.status === 200){
                const data = request.responseText;
                resolve(data);
            }
            else{
                reject('err ');
            }
            
        }
        
    });


mypromise.then(data=>{
    console.log(data);
}).catch(err=>{
    console.log(err);
})










console.log(243)


//promise await

// const getdata = async () =>{
//     const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
//     if (response.status !=200){
//         throw new Error('Cant fetch')
//     }
//     const data = await response.json();
//     return data
// };

// getdata().then(data=>{
//     console.log(data);
// }).catch(err=>{
//     console.log(err);
// })



async function GetWork(){

    let mypromise = new Promise(function(resolve,reject) {
        let request = new XMLHttpRequest();
        request.open('GET','https://jsonplaceholder.typicode.com/todos/1');
        request.send();
        request.onload = function(){
        if (request.status ===200){
            resolve(request.responseText);

        }else{
            reject(request.status);
        }
    };
    });
    const data = await mypromise;
    console.log(data);
};



GetWork();

async function star() {
    const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
    const data = await response.json();
    console.log(data);
}
star();








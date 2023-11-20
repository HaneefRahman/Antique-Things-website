let carts = document.querySelectorAll('.add-to-cart');

let product = [
    {
        name: 'mini camera',
        model_number:'AIL201',
        price: 18000,
        inCart: 0
    },
    {
        name: 'jar set',
        model_number:'AIL202',
        price: 5300,
        inCart: 0
    }
]

for (let i=0; i< carts.length; i++) {
    carts[i].addEventListener('click',() =>  {
        cartNumbers();
        

    })
}        

function cartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if(productNumbers) {
        localStorage.setItem('cartNumbers' , productNumbers + 1);
        document.querySelectorAll('.cart span').textContent = productsNUmbers + 1;

    }else{
        localStorage.setItem('cartNumbers' , 1);
        document.querySelectorAll('.cart span').textContent = 1;
    }

   

}
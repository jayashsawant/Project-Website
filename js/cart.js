let shopItemsData = [{
    id:"a",
    name:"Barca",
    price:25,
    img: "images/jersey.png",
},
{
    id:"b",
    name:"RealMadrid",
    price:45,
    img: "images/jersey1.png",
},
{
    id:"c",
    name:"Juventus",
    price:55,
    img: "images/jersey2.png",
},
{
    id:"d",
    name:"AC Milan",
    price:75,
    img: "images/jersey3.png",
},
{
    id:"e",
    name:"AU FC",
    price:45,
    img: "images/jersey5.png",
},
{
    id:"f",
    name:"Aztecs FC",
    price:15,
    img: "images/jersey6.png",
},
{
    id:"g",
    name:"SVFC",
    price:35,
    img: "images/jerseymain.jpeg",
},
{
    id:"h",
    name:"FC LISBAN",
    price:75,
    img: "images/jersey8.png",
},
{
    id:"i",
    name:"PSG",
    price:65,
    img: "images/jersey9.jpg",
},
{
    id:"j",
    name:"AC Milan",
    price:65,
    img: "images/jersey10.jpg",
},
{
    id:"k",
    name:"Milan",
    price:65,
    img: "images/jersey.png",
},
{
    id:"l",
    name:"Milan",
    price:65,
    img: "images/jersey1.png",
},
];



let label = document.getElementById("label");
    let shoppingcart = document.getElementById("shoppingcart");
let basket = JSON.parse(localStorage.getItem("data")) || [];



let calculation =()=>{
    let cartIcon = document.getElementById("cartamount");
    cartIcon.innerHTML = basket.map((x)=> x.item).reduce((x,y)=>x+y,0);
   
    };

    calculation();

    let generateCartItems = () => {
        if(basket.length !==0){
            return (shoppingcart.innerHTML = basket.map((x)=>{
                let {id, item} = x;
                let search = shopItemsData.find((y)=>y.id === id) || [];
                let {img,name,price} = search;
                return `
                <div class="cartitem">
                <img width="100" src=${search.img} alt="" />
                  <div class="details">
                    <div class="title-price-x">
                        <h4 class="title-price">
                           <p>${name}</p>
                           <p class="cart-item-price">$ ${price}</p>
                        </h4>
                        <i onclick ="removeItem(${id})" class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="buttons">
                        <i onclick="increment(${id})" class="fas fa-plus"></i>
                        <div id=${id} class="quantity">${item}</div>
                        <i onclick="decrement(${id})" class="fas fa-minus"></i>
                    </div>
                    <h3>$ ${item * search.price}</h3>
                  </div>
                </div>
                `;
            }).join(""));    
        } else {
            shoppingcart.innerHTML = ``;
            label.innerHTML = `
            <h2> Cart is Empty<h2>
            <a href="shop.php">
            <button class="HomeBtn">Back to home</button>
            </a>
           `;
        }
    };  
    
    generateCartItems();


    let increment = (id)=> {
        let selectedItem = id;
        let search = basket.find((x)=> x.id === selectedItem.id);
    
        if(search === undefined){
            basket.push({
            id: selectedItem.id,
            item:1,
          });
        } 
        else{
          search.item += 1;
        }
        localStorage.setItem("data", JSON.stringify(basket));
        generateCartItems();
        update(selectedItem.id);
    };

    let decrement = (id)=> {
        let selectedItem = id;
        let search = basket.find((x)=> x.id === selectedItem.id);
    
        if(search === undefined)return;
        else if(search.item === 0)return;
        else{
          search.item -= 1;
        }
        update(selectedItem.id);
        basket = basket.filter((x)=>x.item !==0);
        
        generateCartItems();
    
        localStorage.setItem("data", JSON.stringify(basket));
    };

    let update = (id)=> {

        let search = basket.find((x)=>x.id ===id);
        // console.log(search.item);
        document.getElementById(id).innerHTML =search.item;
        calculation();
        TotalAmount();
    };
    
let removeItem = (id)=>{
    let selectedItem = id;
    // console.log(selectedItem.id);
    basket = basket.filter((x)=>x.id !== selectedItem.id);
    generateCartItems();
    TotalAmount();
    calculation();
    localStorage.setItem("data", JSON.stringify(basket));  
};

let clearCart =()=>{
    basket = [];
    generateCartItems();
    localStorage.setItem("data", JSON.stringify(basket));
    calculation();
};

// let redirect =()=>{
    // window.location.href = "checkout.php";
// }

let TotalAmount = ()=>{
    if(basket.length !==0){
        let amount =basket.map((x)=>{
            let {item, id} = x;
            let search = shopItemsData.find((y)=>y.id === id) || [];
            return item * search.price;
        }).reduce((x,y)=>x+y,0);
        // console.log(amount);
        label.innerHTML =`
        <h2>Total Bill : $ ${amount}</h2>          
        <button id="paynowbtn" >  <a href="checkout.php"  >Pay Now</a></button>
        <button onclick="clearCart()" class="removeAll">Clear Cart</button>
        `;
    }else return;


};

TotalAmount();


// let amount =basket.map((x)=>{
//     let {item, id} = x;
//     let search = shopItemsData.find((y)=>y.id === id) || [];
//     return item * search.price;
// }).reduce((x,y)=>x+y,0);



// {/* <button onclick="redirect()" id="paymentButton" class="checkout">Pay Now</button>  */}
// {/* <button  id="paymentButton" class="checkout">Pay Now</button> */}


// localStorage.setItem("price", JSON.stringify(amount));
// let price = JSON.parse(localStorage.getItem(price1)) || [];
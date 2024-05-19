// смена бекграунда хедера при скролле
window.addEventListener('scroll', function () {
	var header = document.querySelector('header');
	header.classList.toggle('scrolled', window.scrollY > 50);
});

// вкл-выкл подробностей про экскурсию

const detailsContainers = document.querySelectorAll('.detail-cont');

detailsContainers.forEach(container => {
	const close = container.querySelector('.close-overlay');
	const overlay = container.querySelector('.overlay');
	const detailsBtn = container.querySelector('.detail-btn');
	const sliderItems = container.querySelectorAll('.slider-items img');
	const dotsContainer = container.querySelector(
		'.flex.items-center.justify-center.gap-3'
	);

	//переключение слайдов в детально об экскурсии

	const dots = [];

	let currentSlide = 0;

	function showSlide(index) {
		sliderItems.forEach(item => item.classList.remove('active-img'));
		dots.forEach(dot => dot.classList.remove('active-dot'));

		sliderItems[index].classList.add('active-img');
		dots[index].classList.add('active-dot');
		currentSlide = index;
	}

	sliderItems.forEach((item, index) => {
		const dot = document.createElement('span');
		dot.classList.add(
			'w-4',
			'h-4',
			'block',
			'border-2',
			'border-green-500',
			'rounded-[50%]',
			'cursor-pointer'
		);
		dot.addEventListener('click', () => showSlide(index));
		dots.push(dot);
		dotsContainer.appendChild(dot);
	});

	dots[0].classList.add('active-dot');

	function nextSlide() {
		currentSlide = (currentSlide + 1) % sliderItems.length;
		showSlide(currentSlide);
	}

	setInterval(nextSlide, 5000);

	detailsBtn.addEventListener('click', () => {
		overlay.style.display = 'flex';
	});

	close.addEventListener('click', () => {
		overlay.style.display = 'none';
	});
});

flatpickr('#myDatepicker', {});

//burger

const mobMenu = document.querySelector('.burger-container');
const burger = document.querySelector('.burger');
const burgerLinks = document.querySelectorAll('.burger-link');


burger.addEventListener('click', () => {
	mobMenu.classList.toggle('translate-y-[-100%]');
});

burgerLinks.forEach(link => {
	link.addEventListener('click', () => {
		mobMenu.classList.toggle('translate-y-[-100%]');
	});
});




//плавный скролл
const scrollLinks = document.querySelectorAll('.scroll-link');

scrollLinks.forEach(function (link) {
	link.addEventListener('click', function (e) {
		e.preventDefault();

		let targetId = this.querySelector('a').getAttribute('href').substr(1);
		let targetElement = document.getElementById(targetId);

		if (targetElement) {
			window.scrollTo({
				top: targetElement.offsetTop,
				behavior: 'smooth',
			});
		}
	});
});

   const date_field=document.querySelectorAll("#myDatepicker");

const orders=document.querySelector("main");

const orders_json=JSON.parse(orders.attributes.orders.textContent);

var date=null;

var available;





/*

Берет дата бронирования и проверяет если совпадает дата из список заказами

*/

date_field.forEach(e => e.onchange=function(a){

    const title=a.target.attributes.title.value;

    date=e.value;

    var infodata=a.srcElement.parentNode.parentNode.childNodes[5];

available=true;

orders_json.forEach(j => {

    var timestamp = Date.parse(date);

    var timestamp2 = Date.parse(j.data);



    

         if(title==j.name && timestamp==timestamp2){

             available=false;}

} );

                              if(available){
if(lang=="pt"){
 infodata.innerHTML="Excursão disponível";  
}else{
 infodata.innerHTML="Экскурсия доступна";  
}
           

                                  infodata.style.color="green"; 

}else{
	if(lang=="pt"){
 infodata.innerHTML="Não é possível reservar para esta data"; 
}else{
	 infodata.innerHTML="Невозможно забронировать на эту дату"; 
}

   

    infodata.style.color="red"; 

}}); 

    





const lang=document.querySelector("html").attributes.lang.value;



//console.log(lang);



const orderbuttom=document.querySelectorAll("#order_buttom");

//console.log(orderbuttom[0].attributes[0].nodeValue)



orderbuttom.forEach(e => e.onclick=function(a){

    //alert(date);

    

    if(available && date!=null){

        var product=a.target.attributes[0].nodeValue;

        //alert(product);

    $.ajax({

    url: product,        

    method: 'get',         
     beforeSend:function(){

     	 var close = document.querySelector('.close-overlay'); 
     	var load_cont = document.querySelector('.loader_btn'); 
var loader = document.querySelector('.loader_cont'); 
var load_btn = document.querySelector('.load-button'); 
 
 load_btn.style.display = 'none'; 
 loader.style.display = 'block'; 
 close.style.zIndex = '-1'; 
     },
    success: function(data){

	   if(lang=="ru"){

            window.location.href = "./checkout"+"?data="+date;

       }else{

           window.location.href = "./checkout"+"?data="+date+"&lang="+lang; 

       }

       

    }

});

    }else{

        var infodata=document.querySelector(".info-data");

console.log(infodata)
        if(date==null){
if(lang=="pt"){
infodata.innerHTML="Selecione a data"; 
}else{
   infodata.innerHTML="Выберите дату"; 
}
          

    infodata.style.color="red"; 

        }

        if(!available){
if(lang=="pt"){
infodata.innerHTML="Selecione a data disponível"; 
}else{
	infodata.innerHTML="Выберите доступную дату"; 
}
             

    infodata.style.color="red"; 

        }

        

    }



});








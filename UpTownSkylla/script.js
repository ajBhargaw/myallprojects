const header = document.querySelector(".navbars");
// window.onscroll= ()=>{
//    if(window.scrollY >= 150){
//       header.classList.add("navadd");
//    }
// }

window.addEventListener('scroll', ()=>{
   if(window.scrollY >= 150){
      header.classList.add('navadd');
   }else{
      header.classList.remove('navadd');
   }
})


var count = document.querySelectorAll('.count');
window.onscroll=()=>{
   count.forEach((v,i)=>{
      if(window.scrollY >= 300){
         var k=1;
         setInterval(()=>{
            if( i == 0 ){
                if(k <= 6){
                    v.innerHTML = k++ + "+";
                }  
            }
            else if(i ==1 ){
                if( k<=1500){
                  v.innerHTML = k++ + "+";
               }   
            }
           
         },10) 

        }  
   })     
}


<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 

let page_location = window.location.pathname;
if(page_location.includes("tarifs")){

   
   const counters = document.querySelectorAll('.tarif');
   const speed = 100; // The lower the slower

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		// Lower inc to slow and higher to slow
		const inc = target / speed;

		// console.log(inc);
		// console.log(count);

		// Check if target is reached
		if (count > target) {
			// Add inc to count and output in counter
			counter.innerText = Math.ceil(count - inc);
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});
} else if(page_location.includes("f-a-q")) {
   
   const question1 = document.querySelector("#q1");
   const question2 = document.querySelector("#q2");
   const question3 = document.querySelector("#q3");
   const question4 = document.querySelector("#q4");
   const question5 = document.querySelector("#q5");
   const question1i = document.querySelector("#q1 > i");
   const question2i = document.querySelector("#q2 > i");
   const question3i = document.querySelector("#q3 > i");
   const question4i = document.querySelector("#q4 > i");
   const question5i = document.querySelector("#q5 > i");
   const answer1 = document.querySelector("#a1");
   const answer2 = document.querySelector("#a2");
   const answer3 = document.querySelector("#a3");
   const answer4 = document.querySelector("#a4");
   const answer5 = document.querySelector("#a5");
  
  question1.addEventListener("click", () => {
    answer1.style = "display: block;";
    question1i.classList.remove("fa-chevron-down");
    question1i.classList.add("fa-chevron-up");
  });
  
  question2.addEventListener("click", () => {
    answer2.style = "display: block;";
    question2i.classList.remove("fa-chevron-down");
    question2i.classList.add("fa-chevron-up");
  });
  
  question3.addEventListener("click", () => {
    answer3.style = "display: block;";
    question3i.classList.remove("fa-chevron-down");
    question3i.classList.add("fa-chevron-up");
  });
  
  question4.addEventListener("click", () => {
    answer4.style = "display: block;";
    question4i.classList.remove("fa-chevron-down");
    question4i.classList.add("fa-chevron-up");
  });
  
  question5.addEventListener("click", () => {
    answer5.style = "display: block;";
    question5i.classList.remove("fa-chevron-down");
    question5i.classList.add("fa-chevron-up");
  });
  
  
  const btn_yes = document.querySelector("#btn_yes");
  const btn_no = document.querySelector("#btn_no");
  const btn_container = document.querySelector(".avis");
  
  btn_yes.addEventListener("click", () => {
    btn_yes.style = "display: none";
    btn_no.style = "display: none";
    btn_container.innerHTML = btn_container.innerHTML + "<p class='thanks'>Merci beaucoup pour ce retour ! <i class='far fa-grin-alt'></i></p>";
  });
}</script>
<!-- end Simple Custom CSS and JS -->

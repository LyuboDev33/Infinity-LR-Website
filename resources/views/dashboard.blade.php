<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
@include('layouts.pages-nav')
    

		<div class="main-container">
			<div class="navcontainer">
					<nav class="nav">
							<div class="nav-upper-options">

                @include('layouts.sidebar')

							</div>
					</nav>
			</div>

			<div class="main">
					<div style="height: auto;" class="report-container">

				
						 @if (session('message'))
							
						 	<div class="completeFormBackground">
									<div class="image_modal">

										<p>Благодарим за информацията!</p>
										<p>Вече имате достъп в обучителната система <b>Infinity 21</b></p>
										<p>Пожелаваме успех!</p>

										<button class="goToRefresh">Към Обученията <i class="fal fa-long-arrow-right"></i></button>
										{{-- <div class="success">
												<div class="alert alert-success">
												{{ session('message') }}
												</div>
											</div> --}}

									</div>
							</div>

						<script>
							
							let goToRefresh = document.querySelector('.goToRefresh');

							goToRefresh.addEventListener('click', function () { 

								window.location.reload();

							})

						</script>

						@endif 

							<div class="welcome_div">

								@if (Auth::user()->completed_assignment ===  "not_completed")

						<p>За да получите достъп до цялото съдържание, моля попълнете формуляра. </p>
								
						<hr>
								<br>

								<div id="preloader_firstLogin">
							
									<div class="preloader_gif">
										 <img src="/images/dashboard-images/CircleLoader.gif" alt="Зареждане">
										 <p>Зареждане...</p>
									 </div> 
		 
									 <div class="welcomeMSGS">
										 <p class="first_hi">Здравейте <b class="infitnity21">{{ Auth::user()->name }}</b>!</p><br>
										 <p class="second_hi">Добре дошли в учебната система на <br><b class="infitnity21">Infinity 21</b></p><br>
										 <p class="third_hi">За да отключите достъпа си до всички обучения и материали е нужно да попълните кратък формуляр</p>
										 <button class="goToAssesment">Към Формуляра <i class="fal fa-long-arrow-right"></i></button>
									 </div>
								 
								 </div>
						
								
								<form class="assesmentForm" method="POST" action="{{ route('assesment') }}"> 
									@csrf
							
									<label class="theLabels" for="industry_knowledge_yes">1. Запознати ли сте с индустрията мултилевъл маркетинг?</label><br>
									<input type="radio" name="industry_knowledge" id="industry_knowledge_yes" value="ДА" required>
									<label for="industry_knowledge_yes">Да</label><br>
									<input type="radio" name="industry_knowledge" id="industry_knowledge_no" value="НЕ" required>
									<label for="industry_knowledge_no">Не</label><br>
							
									<br>
							
									<label class="theLabels" for="industry_experience_yes">2. Имате ли предишен опит в мрежова компания?</label><br>
									<input type="radio" name="industry_experience" id="industry_experience_yes" value="ДА" required>
									<label for="industry_experience_yes">Да</label><br>
									<input type="radio" name="industry_experience" id="industry_experience_no" value="НЕ" required>
									<label for="industry_experience_no">Не</label><br>
							
									<br>
							
									<label class="theLabels" for="description">3. Ако имате, колко време и с кои компании сте си партнирали?</label><br>
									<textarea class="textArea shadow" name="description" id="description" required></textarea>
							
									<br>	<br>
							
									<label class="theLabels" for="current_position_employee">4. В момента сте...</label><br><br>
									<input type="radio" name="current_position" id="current_position_employee" value="Служител" required>
									<label for="current_position_employee"><b>Служител</b>- нает сте от други хора или институции да изпълнявате определена работа срещу заплащане. Имате шеф/супервайзор и изпълнявате вашите задължения по указания. Работното време, почивките и нивото на заплащане са фиксирани от работодателя.</label><br><br>
									<input type="radio" name="current_position" id="current_position_business_owner" value="Собственик на малък или среден бизнес" required>
									<label for="current_position_business_owner"><b>Собственик на малък или среден бизнес</b> - като магазин, кафе, ресторант, салон, агенция, и др. Собственият бизнес обикновено е свързан с големи инвестиции, риск и имате постоянна заетост дори по празници.</label><br><br>
									<input type="radio" name="current_position" id="current_position_system_builder" value="Изградили работеща система" required>
									<label for="current_position_system_builder"><b>Изградили работеща система</b> - която не се нуждае от непрекъсната намеса от ваша страна. Системата ви носи приход и когато не работите.</label><br><br>
									<input type="radio" name="current_position" id="current_position_investor" value="Инвеститор" required>
									<label for="current_position_investor"><b>Инвеститор</b> - доходите ви са основно чрез инвестиции в различни активи и проекти. За да имате постоянен и основен доход правите големи капиталовложения в различни бизнеси, финансови инструменти, имоти.</label><br><br>
							
									<label class="theLabels" for="montly_income">5. Какъв ежемесечен доход би ви позволил да се чувствате спокойни и финансово стабилни?</label><br>
									<textarea id="montly_income" required class="textArea shadow" name="montly_income"></textarea>

									<br><br>
							
									<label class="theLabels" for="better_standart">6. За какво бихте използвали тези пари?<br> /може и повече от един отговор/</label><br><br>
									
									<input value="За повишаване на стандарта на живот" type="checkbox" id="better_standart" name="money_useage[]"/>		
									<label for="better_standart">За повишаване на стандарта на живот (продукти, дрехи, аксесоари и т.н.)</label>
							
									<br><br>
							
									<input value="Нов автомобил" type="checkbox" id="new_car" name="money_useage[]"/>
									<label for="new_car">Нов автомобил/и</label>
							
									<br><br>
							
									<input value="Ново жилище" type="checkbox" id="new_apartment" name="money_useage[]"/>
									<label for="new_apartment">Ново жилище</label>
							
									<br><br>
							
									<input value="Развлечения и пътешествия, курсове за личностно развитие" type="checkbox" id="travelling" name="money_useage[]"/>
									<label for="travelling">Развлечения и пътешествия, курсове за личностно развитие</label>
							
									<br><br>
							
									<input value="За образованието на децата си" type="checkbox" id="education" name="money_useage[]"/>
									<label for="education">За образованието на децата си</label>
							
									<br><br>
							
									<label for="other_reasons">Друго / опишете какво/ ……… .</label><br>
									<textarea class="textArea shadow" id="other_reasons" name="money_useage[]" type="text"></textarea>
							
									<br><br>
							
									<label class="theLabels" for="accomplish_job_yes">7. Можете ли да постигнете такъв доход за следващата година чрез това, което работите в момента, придобивайки и повече свободно време?</label><br>
									<input type="radio" name="accomplish_job" id="accomplish_job_yes" value="ДА" required>
									<label for="accomplish_job_yes">Да</label><br>
									<input type="radio" name="accomplish_job" id="accomplish_job_no" value="НЕ" required>
									<label for="accomplish_job_no">Не</label>
							
									<br><br>
							
									<label class="theLabels" for="six_months">8. Какъв месечен доход бихте искали да си заработите в LR в следващите:</label><br><br>
									
									<p>6 месеца: </p>
									<input name="six_months" id="six_months" type="text" required><br><br>
							
									<p>12 месеца: </p>
									<input name="twelve_months" id="twelve_months" type="text" required>
							
									<br><br>
							
									<label class="theLabels" for="hours_daily">9. Колко часа на ден можете да отделяте за изграждането на вашия LR бизнес?</label><br>
									<input id="hours_daily" name="hours_daily" type="text" required>
							
									<br><br>
							
									<label class="theLabels" for="priority_income">10. Изберете кой от следните варианти е приоритет за вас?</label><br>
									<input type="radio" name="priority" id="priority_income" value="Допълнителен Доход" required>
									<label for="priority_income">Допълнителен Доход</label><br>
									<input type="radio" name="priority" id="priority_free_time" value="Повече Свободно Време" required>
									<label for="priority_free_time">Повече Свободно Време</label><br>
									<input type="radio" name="priority" id="priority_helping_others" value="Да помагате на другите" required>
									<label for="priority_helping_others">Да помагате на другите</label><br>
									<input type="radio" name="priority" id="priority_own_business" value="Да имате свой бизнес" required>
									<label for="priority_own_business">Да имате свой бизнес</label><br>
									<input type="radio" name="priority" id="priority_financial_freedom" value="Финансова свобода" required>
									<label for="priority_financial_freedom">Финансова свобода</label><br>
							
									<br>
							
									<label class="theLabels" for="occupation">11. Какво е вашето настоящо занимание?</label>
									<input id="occupation" name="occupation" type="text" required>
							
									<br><br>
							
									<label class="theLabels" for="are_you_ready_yes">12. Готови ли сте да работите екипно и по система, която ще ви доведе до резултатите, които искате?</label><br>
									<input type="radio" name="are_you_ready" id="are_you_ready_yes" value="ДА" required>
									<label for="are_you_ready_yes">Да</label><br>
									<input type="radio" name="are_you_ready" id="are_you_ready_no" value="НЕ" required>
									<label for="are_you_ready_no">Не</label><br>
							
									<button class="submitAssesment" type="submit">Изпрати Формата</button>
							
									<input name="phone_number_of_user" value="{{ Auth::user()->phone_number }}" type="hidden">
									<input name="email_of_user" value="{{ Auth::user()->email }}" type="hidden">
									<input name="name_of_user" value="{{ Auth::user()->name }}" type="hidden">
									<input name="completed" value="completed" type="hidden">
							</form>
							<script src="/javascript/dashboard-js/dashboard.js"></script>

						</div>
						@endif

					</div>
			</div>
      
	</div>






		{{-- <div class="welcome_div">
			<p>Здравейте <b class="infitnity21">{{ Auth::user()->name }}</b>!</p>
			<p>Добре дошли в учебната система на <br><b class="infitnity21">Infinity 21</b></p>
		</div> --}}

    {{-- <div>
			<div class="responsive-wrapper">
					
            <div class="content-main">
				<div class="card-grid">
					<article class="card">
						<div class="card-header">
							
						</div>
					</article>

					<article class="card">
						<div class="card-header">
							
						</div>
					</article>
				</div>
			</div> --}}
{{-- 			
		</div>
	</div> --}}

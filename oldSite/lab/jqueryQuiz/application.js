$(document).ready(function(){



	//the quiz's question bank
	var allQuestions = [{question: "Where was Alex born?", 
						 choices: ["Toledo", "Boulder", "Columbus", "Detroit"], 
						 correctAnswer:0},

						 {question: "What's Alex's favorite color?", 
						 choices: ["green", "orange", "blue", "red"], 
						 correctAnswer:2},

						 {question: "What is Alex's favorite beer?", 
						 choices: ["PBR", "Budweiser", "Heineken", "Guinness"], 
						 correctAnswer:3},

						 {question: "Where would Alex like to live most?", 
						 choices: ["Washington D.C.", "New York City", "San Francisco", "Detroit"], 
						 correctAnswer:1},

						 {question: "What is Alex's favorite food?", 
						 choices: ["pizza", "guacamole", "strawberries", "peanut butter"], 
						 correctAnswer:3}

						];



	
	var numOfQuestions = allQuestions.length; 
	
	var currentQuestion = 0;


	var removeQuestion = function(){
		$('div.question').remove();
		$('div.answers').remove();
	};

	var addQuestion = function(){
		
		//insert a question into the HTML of a page
		$('div.questionContainer').append('<div class="question"><b>Question ' + (currentQuestion + 1) + ':</b> ' + allQuestions[currentQuestion].question +
										  '</div> <div class="answers"><ul></ul></div>');
		
		var numOfResponses = allQuestions[currentQuestion].choices.length; //should be used with var i in a for loop when each question loads
		//insert all choices for a questions into the HTML of the page
		for(i=0; i < numOfResponses; i++){	
			$('div.questionContainer div.answers ul').append('<li><input type="radio" name="q'+(currentQuestion+1) +'">' + allQuestions[currentQuestion].choices[i] + '</input></li>');
		}

		$("input[type=button]").attr("disabled", "disabled"); 

		//enable next button when a radio button is selected
		$('input[type=radio]').on('click', function(event){
			
			
				$("input[type=button]").attr("disabled", false);
		    
		});
		
	};

	//add the initial question
	addQuestion();
	
					

	

	//keep score of how many correct answers were input
	var trueCount = 0; 

	//used to keep track of 'correct' and 'incorrect' answers to display on results screen
	var results = new Array(); 

	//clicking the 'Next' (after being enabled) button causes this function to occur
	$('input[type=button][value=Next]').on('click', function(event){ 

		if(currentQuestion < numOfQuestions){
			console.log("current question: "+currentQuestion);
			var radioButtons = $('input[type=radio]');
			var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));

			if(currentQuestion < numOfQuestions){
				var currentCorrect = allQuestions[currentQuestion].correctAnswer;
			}

			//determine if the submitted response is correct
			if(selectedIndex == currentCorrect){
				trueCount++;
				results[currentQuestion] = "correct";
			}
			else{
				results[currentQuestion] = "incorrect";
			}

			console.log("current question: "+currentQuestion);

			removeQuestion();
			currentQuestion++; //keeping track of which question we're on
			
		}
		if(currentQuestion<numOfQuestions){
			addQuestion();
		}
		else if(currentQuestion == numOfQuestions){
			results();
			$(this).hide();
		}
	});


	var results = function(){ //compare correctAnswers vs selectedAnswers
		
		var resultSet = '';
		for(i = 0; i < numOfQuestions; i++){
			resultSet += '<div> Question ' + (i + 1) + ' is ' + results[i] + '</div>'//add a div with a sentence about each answer's correctness into the existing resultSet object
		}
		resultSet += '<div class="totalScore">Your total score is ' + trueCount * 20 + ' / 100</div>'
		$('#resultKeeper').html(resultSet).show();//add HTML compiled in resultSet object into the exiting HTML resultKeeper div
		
		console.log("you got " + trueCount + " answers right");
	};


});
$(document).ready(function(){



	//the quiz's question bank
	var allQuestions = [{question: "At the Constitutional Convention of 1787, the Great Compromise was concerned mainly with", 
						 choices: ["representation of the states in Congress", "the powers of the executive", "the question of slavery", "control of interstate commerce"], 
						 correctAnswer:0},

						 {question: "The Great Compromise settled the issue of representation in Congress by", 
						 choices: ["giving each state two senators and a number of representatives based on population", "allowing all states to have equal representation in Congress", "having an equal number of members in each House of Congress", "limiting the population of large states"], 
						 correctAnswer:0},

						 {question: "At the Constitutional Convention of 1787, delegates from the small states most strongly supported the idea of?", 
						 choices: ["establishing a strong national executive", "levying taxes on exports", "popular election of Senators", "equal representation for the states in the national legislature"], 
						 correctAnswer:3},

						 {question: "When the United States Constitution was written, which compromise was reached by the authors to gain the support of the states with small populations?", 
						 choices: ["Congress would consist of both a House of Representatives and a Senate", "Five enslaved persons would be counted as three free persons for the purpose of taxation", "The President would be selected by the direct vote of the people", "Exported goods could not be taxed, but imported goods could be taxed"], 
						 correctAnswer:0},

						 {question: "At the Constitutional Convention of 1787, the Three-fifths Compromise dealt with", 
						 choices: ["amendments to the constitution", "women’s rights", "representation in Congress", "The rights of accused persons"], 
						 correctAnswer:2}

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
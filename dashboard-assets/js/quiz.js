function quizSubmission(title, qNumber){
		//Deciding what answer were chosen and storing them
		var answers = new Array(qNumber + 1);
		for(var i = 1; i <= qNumber; i++){
			var aux = title + i;
			var j = 1;
			var ans = "";
			while(document.getElementById(aux + j)){
				var obj = document.getElementById(aux + j);
				if(obj.checked === true){
					ans += j;
				}
				j++;
			}
			answers[i] = ans;
		}
		//Clearing all choices
		var fields = document.getElementsByTagName('input');
    	var length = fields.length;
		while (length--) {
    		if (fields[length].type === 'radio') { fields[length].checked = false; }
		}

		//Submitting the answers to php and receiving the response
		$.ajax({
            type: 'POST',
            url: '../../php/quiz.php',
            data: {title:title, qNumber:qNumber, answers:answers},
                success: function(data){
                    if(data < 75)
                    {
                        swal({   
                            title: "Fail! " + data + "% correct answers",   
                            text: "Quiz attemp failed. You answered " + Math.round(data * qNumber / 100) + "/" + qNumber + " questions correctly! Please, review the lessons and try again!",
                            type: "error",   
                            confirmButtonText: "Ok" 
                        });
                    }
                    else
                    {   
                        swal({   
                            title: "Success! " + data + "% correct answers",   
                            text: "Congratulations! You passed the quiz with " + Math.round(data * qNumber / 100) + "/" + qNumber + " correct answers!",
                            type: "success",   
                            confirmButtonText: "Ok" 
                        });

                        if(title[1] === 'h')
                            parent.setProgress('h', title);
                        else if(title[1] === 'c')
                            parent.setProgress('c', title);
                        else if(title[1] === 'j')
                            parent.setProgress('j', title);
                        else 
                            parent.setProgress('w', title);
                    }
               }
        });
	}
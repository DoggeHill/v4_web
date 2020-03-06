function test() {
    alert("working")
}

// VARIABLES
let absoluteId = 1;
let gameQuestions = document.getElementsByClassName('gameQuestion');
let progressLevels = document.getElementsByClassName('progressLevel');


// FUNCTIONS
function changeLevel(clickedId) {
    if (clickedId > absoluteId) {
        const questionIdMinus = "question" + absoluteId;
        document.getElementById(questionIdMinus).classList.add("animated", "fadeOutUp");

        for (k = 0; k < gameQuestions.length; k++) {
            progressLevels[k].classList.remove("activeLevel")
        }
        for (y = clickedId; y > 0;
             levelId = "level" + y,
                 document.getElementById(levelId).classList.add("activeLevel"),
                 y--
        )


        setTimeout( () => {
            console.log(clickedId)
            // Getting to initial state
            for (i = 0; i < gameQuestions.length; i++) {
                gameQuestions[i].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                gameQuestions[i].style.display = 'none';
            }

            const questionId = "question" + clickedId;
            let levelId = "level" + clickedId;

            document.getElementById(questionId).style.display = "flex";
            document.getElementById(levelId).classList.add("activeLevel");
            document.getElementById(questionId).classList.add("animated", "fadeInUp");

            absoluteId = clickedId;
            console.log(absoluteId)}, 400);
            absoluteId = clickedId
    } else if (clickedId < absoluteId) {
        const questionIdMinus = "question" + absoluteId;
        document.getElementById(questionIdMinus).classList.add("animated", "fadeOutDown");

        for (k = 0; k < gameQuestions.length; k++) {
            progressLevels[k].classList.remove("activeLevel")
        }
        for (y = clickedId; y > 0;
             levelId = "level" + y,
                 document.getElementById(levelId).classList.add("activeLevel"),
                 y--
        )

        setTimeout( () => {
            // Getting to initial state
            for (i = 0; i < gameQuestions.length; i++) {
                gameQuestions[i].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                gameQuestions[i].style.display = 'none';
            }

            const questionId = "question" + clickedId;
            let levelId = "level" + clickedId;

            document.getElementById(questionId).style.display = "flex";
            document.getElementById(levelId).classList.add("activeLevel");
            document.getElementById(questionId).classList.add("animated", "fadeInDown");
            absoluteId = clickedId},400);
            console.log(absoluteId);
            absoluteId = clickedId
    }
}


    /*


    if (clickedId === absoluteId || clickedId === 1) {

    } else if (clickedId > absoluteId) {

        let subtractedId = absoluteId;
        let questionIdMinus = "question" + subtractedId;
        document.getElementById(questionIdMinus).classList.add("animated", "fadeOutUp");
        absoluteId = clickedId;

        document.getElementById(questionIdMinus).addEventListener('animationend', function () {

            // Getting to initial state
            for (i = 0; i < gameQuestions.length; i++) {
                gameQuestions[i].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                gameQuestions[i].style.display = 'none';
                gameQuestions[i].setAttribute("style", "display: none !important");

            }
            for (k = 0; k < gameQuestions.length; k++) {
                progressLevels[k].classList.remove("activeLevel")
            }

            // modifying style

            for (y = clickedId; y > 0;
                 levelId = "level" + y,
                     document.getElementById(levelId).classList.add("activeLevel"),
                     y--
            )

                document.getElementById(questionId).style.display = "flex";
            document.getElementById(levelId).classList.add("activeLevel");
            document.getElementById(questionId).classList.add("fadeInUp");

            document.getElementById(questionId).addEventListener('animationend', function () {

                for (i = 0; i < gameQuestions.length; i++) {
                    gameQuestions[i].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                }
                ;
            });
        });

        clicked++
        console.log(absoluteId, clickedId)


    } else if (clickedId < absoluteId) {
        let subtractedId = absoluteId;
        let questionIdMinus = "question" + subtractedId;
        document.getElementById(questionIdMinus).classList.add("animated", "fadeOutDown");
        absoluteId = clickedId;
        document.getElementById(questionIdMinus).addEventListener('animationend', function () {

            // Getting to initial state
            for (a = 0; a < gameQuestions.length; a++) {
                gameQuestions[a].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                gameQuestions[a].style.display = 'none';
                gameQuestions[a].setAttribute("style", "display: none !important");

            }
            for (k = 0; k < gameQuestions.length; k++) {
                progressLevels[k].classList.remove("activeLevel")
            }


            // modifying style

            for (y = clickedId; y > 0;
                 levelId = "level" + y,
                     document.getElementById(levelId).classList.add("activeLevel"),
                     y--
            )*/
/*
            document.getElementById(questionId).style.display = "flex";
            document.getElementById(levelId).classList.add("activeLevel");
            document.getElementById(questionId).classList.add("fadeInDown");
            document.getElementById(questionId).addEventListener('animationend', function () {
                for (i = 0; i < gameQuestions.length; i++) {
                    gameQuestions[i].classList.remove("fadeInUp", "fadeInDown", "fadeOutDown", "fadeOutUp");
                }
                ;
            });
        });

        console.log(absoluteId, clickedId)

    }
    absoluteId = clickedId;
    console.log(absoluteId, clickedId);
    clicked--
}*/







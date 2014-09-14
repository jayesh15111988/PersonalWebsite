    $(document).ready(function() {

        if (can.width < window.innerWidth) {
            can.width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;
        }
        if (can.height < window.innerHeight) {
            can.height = window.innerHeight ||
                document.documentElement.clientHeight ||
                document.body.clientHeight;

        }

        canvasContext.fillStyle = "rgba(120,190,125,0.5)";
        canvasContext.fillRect(0, 0, can.width, can.height);

        displayInstructionsViewWithInstructions("Click to start the Game. Go and eat small particles and stay away from large ones.", 0);

    })

    function mouse_monitor(e) {

        var canvasOffset = $("#growUpCanvas").offset();
        var offsetX = canvasOffset.left;
        var offsetY = canvasOffset.top;
        mx = e.pageX - offsetX;
        my = e.pageY - offsetY;

    }

    var moveBalls = function() {

        var can = document.getElementById("growUpCanvas");
        if (can.width < window.innerWidth) {
            can.width = window.innerWidth;
        }
        if (can.height < window.innerHeight) {
            can.height = window.innerHeight;
        }

        this.addEventListener('mousemove', mouse_monitor);

        radiusSmall = maximumBallRadius / (1 + stageNumber); //15*(stageNumber/3); 

        function drawFrameOnScreen() {

            canvasContext.globalCompositeOperation = "source-over";

            //This is a Canvas background
            canvasContext.fillStyle = "rgba(130,130,130,1)";
            canvasContext.fillRect(0, 0, can.width, can.height);

            //This is drawing of actual ring which moves with cursor on screen
            canvasContext.strokeStyle = "rgba(230,240,240,1)";
            canvasContext.beginPath();
            canvasContext.arc(mx, my, radiusSmall, 0, 2 * Math.PI, false);

            canvasContext.closePath();
            canvasContext.stroke();
            end = new Date().getTime();
            totalTime = (end - start) / 1000;
            totalTime = Number((totalTime).toFixed(decimalPointsToRoundTo));
            remainingTimeForGame = Number((maximumTimeForStage - totalTime).toFixed(decimalPointsToRoundTo));

            scoreBoard.innerHTML = '  Stage Number : ' + stageNumber + '<br/>  Points : ' + points + '<br/>  Points Required : ' + pointsRequired + '<br/>  Time Played : ' + totalTime + "<br/>  Time Remaining : " + remainingTimeForGame;

            if (remainingTimeForGame <= 0) {
                gameOverCleanup("Maximum time reached and Game Over!");
            }
            for (var j = 0; j < particle.length; j++) {

                var par1 = particle[j];

                if (didParticleIntersectWithParticle(par1)) {

                    if (par1.radius > radiusSmall) {

                        gameOverCleanup("You have been eaten by big fish and Game Over!");

                    } else {

                        incrementPointsAfterParticleConsumption(par1.radius);

                        particle.splice(j, 1);

                        if (points >= pointsRequired) {

                            updateGameParametersForNextStage();

                        }

                    }

                }

            }

            for (var i = 0; i < particle.length; i++) {

                var part = particle[i];

                canvasContext.beginPath();
                canvasContext.fillStyle = part.color;
                canvasContext.arc(part.x, part.y, part.radius, 0, 2 * Math.PI, false); //Anticlockwise fill colors
                canvasContext.closePath();
                canvasContext.fill();

                //vx and vy are velocities in x and y direction respectively
                part.x += part.vx;
                part.y += part.vy;

                //Extreme left or Extreme right
                if ((part.x <= 0) || (part.x >= can.width)) {
                    part.x = Math.random() * can.width;
                }

                //Extreme top or Extreme Bottom
                else if ((part.y <= 0) || (part.y >= can.height)) {
                    part.y = Math.random() * can.height;
                }
            }

        }

        function createNewRandomBall() {

            this.x = Math.random() * can.width;
            this.y = Math.random() * can.height;

            //Very first level of our game

            var newVelocityIncrementor = stageNumber * ballsVelocityFactorIncrementParameter;

            this.vx = (Math.random() * 20 * newVelocityIncrementor);
            this.vy = (Math.random() * 20 * newVelocityIncrementor);

            this.color = getNewColorWithRandomRGBValues();

            //Maximum radius limited to 20 units for any random ball thus generated on screen

            this.radius = Math.random() * maximumBallRadius;

        }

        //Collection of moving balls on screen

        var particle = [];

        for (var i = 0; i < particleNumbers; i++) {

            particle.push(new createNewRandomBall());

        }

        intervalGame = setInterval(drawFrameOnScreen, (1 / frameRate) * 1000);
    }
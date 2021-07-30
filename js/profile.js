//html elements
const getName = document.querySelector('#GetName');
const getTextColor = document.querySelector('#GetTextColor');
const getBoxColor = document.querySelector('#GetBoxColor');
const getBGColor = document.querySelector('#GetBGColor');
const getHighlight = document.querySelector('#GetHighlight');
const getLogoColor = document.querySelector('#GetLogoColor');
const nameDisplay = document.querySelector('#NameDisplay');
const chart = document.querySelector('#Chart');
const chart2 = document.querySelector('#Chart2');
const data1 = document.querySelector('#DATA1');
const data2 = document.querySelector('#DATA2');


//variables
let scores = [['Attempt', 'WPM', 'Errors']];
let missedCharacters = [['Character','Number of Misses']];
let mostMissed = [['Character','Number of Misses']];
window.addEventListener('load', init); 

function init () {
    //localStorage.removeItem('Missed Characters');//testing
    refresh();
    //Listen for Name
    getName.addEventListener('input', getNamer);
    getTextColor.addEventListener('input', setTextColor);
    getBoxColor.addEventListener('input', setBoxColor);
    getBGColor.addEventListener('input', setBGColor);
    getHighlight.addEventListener('input', setHighlight);
    getLogoColor.addEventListener('input', setLogoColor); 
}

function getNamer () 
{
    localStorage.setItem('name', getName.value );  
    nameDisplay.innerHTML = 'Welcome to your profile ' + getName.value; 
}

function setTextColor()
{
    localStorage.setItem('Text Color', getTextColor.value);
    style();
}

function setBoxColor()
{
    localStorage.setItem('Box Color', getBoxColor.value);
    style();
}

function setBGColor()
{
    localStorage.setItem('BG Color', getBGColor.value);
    style();
}

function setHighlight()
{
    localStorage.setItem('Highlight', getHighlight.value);
}

function setLogoColor()
{
    localStorage.setItem('Logo Color', getLogoColor.checked);
    // if(document.getElementById('Logo').src = "img\\Logo\\SF_logo_black.png"){
    //     localStorage.setItem('LogoColorWrite', 'White');
    // }else{
    //     localStorage.setItem('LogoColorWrite', 'Black');
    // }
    style();
    
}




function refresh()
{
    // refresh displays all data related to a user's profile as stored from the wordsPerMinute script. 

    //name
    if(localStorage.getItem('name') !== null){
        nameDisplay.innerHTML = 'Welcome to your profile <br>' + localStorage.getItem('name'); 
    }

    //scores
    if (localStorage.getItem('scores') !== null)
    {
        let p = 19; // starting here because the first three values are words, wpm , average...could fix, but nah..t right now
        let block = [0,0,0]; 
        let scoresTemp = localStorage.getItem('scores'); // scores = an array of the following array [plays,wpm,errorCount] where as plays is the number of tests that a user has done. 
        while (p < scoresTemp.length)
        {
            let val = ""; // a placeholder for the rawtext that localstorage stores into scores
            let q = 0; 
            while (q < 3)
            {
                while (scoresTemp[p] !== ',' && p < scoresTemp.length)
                {
                    val = val + scoresTemp[p];
                    p = p + 1; 
                }
                block[q] = Number(val); 
                val = "";
                p = p + 1;
                q = q + 1;
            }
            scores.push([block[0], block[1], block[2]]);
        }

        // draw chart 
        chart.innerHTML = '<h2>Your Performance</h2><div id="curve_chart"/>';
        drawChart(scores);
    }

    // missed characters
    if (localStorage.getItem('Missed Characters') !== null)
    {
        let p = 27; // starting here because the first two values are 'Number of Misses,Character,' a total of 27 characters...could fix, but nah..t right now
        let block = ['',0];
        let charsTemp = localStorage.getItem('Missed Characters'); 
        while (p < charsTemp.length)
        {
            let q = 0; 
            while (q < 2)
            {
                if(q % 2 === 0)
                {
                    block[q] = charsTemp[p]; 
                }
                else
                {
                    block[q] = Number(charsTemp[p]); // need to convert string count of missed characters to a number.  so '1' to 1.  
                }
                
                p = p + 2; // 2 because there is a comma between each relevant value 
                q = q + 1;  
            }
            missedCharacters.push([block[0], block[1]]);
        }
        chart2.innerHTML = '<h2>Most Frequently Missed Characters</h2><div id="chart_div"/>';
        mostFreqMissed(); //sets mostFreqChars to the top ten most frequently missed characters
        drawChart2(mostMissed);
    }


    // xp 
    if (localStorage.getItem('xp') !== null)
    {
        data1.innerHTML = '<h3>Total Typed Words: <span class = "text-warning">' + localStorage.getItem('xp') + '</span></h3>';
    }

    // highest score 
    
    var highScore = 0; 
    var q = 0; 
    while (q < scores.length)
    {
        if (scores[q][1] > highScore)
        {
            highScore = scores[q][1];
        }
        q = q + 1; 
    }
    localStorage.setItem('highScore', highScore);
    data1.innerHTML = data1.innerHTML + '<br><h3>Best WPM: <span class = "text-success">' + localStorage.getItem('highScore') + '</span></h3>';
    

    //Average Score
    if (localStorage.getItem('average') !== null)
    {
        data1.innerHTML = data1.innerHTML + '<br><h3>Average WPM</h3>' + Number(localStorage.getItem('average')).toFixed(2);
    }


    //Average Errors
    if (localStorage.getItem('averageError') !== null)
    {
        data1.innerHTML = data1.innerHTML + '<br><br><h3>Your Average Errors</h3>' + Number(localStorage.getItem('averageError')).toFixed(2);
    }


    
    //Errors list and missed expressions

    if (localStorage.getItem('errors') !== null)
    {
        //Error subroutine, grab errors from ls, transcribe to array of words 
        var tempErrorString = String(localStorage.getItem('errors'));
        var tempErrorList = []; 
        var j = 0; 
        var tempWord = ''; 
        while(tempErrorString.length > j)
        {
            while(tempErrorString[j] !== '<' && j < tempErrorString.length)
            {
                tempErrorString.length
                //console.log('j:' + j + 'String length' + tempErrorString.length);
                tempWord = tempWord + tempErrorString[j]; 
                j = j + 1;
            }

            tempErrorList.push(tempWord);
            tempWord = '';
            j = j + 4; 

        }
        //print Errors
        data2.innerHTML = data2.innerHTML + '<h3>Total Missed Words: <span class = "text-danger">' + tempErrorList.length + '</span></h3>';
        data2.innerHTML = data2.innerHTML +  '<br><h3>Your most recent missed expressions:</h3>';
        var i = 1; 
        while(i < 21 && i < tempErrorList.length)
        {
            data2.innerHTML = data2.innerHTML + tempErrorList[tempErrorList.length-i] + '<br>'; 
            i = i + 1; 
        }
    }


    //set color boxes to previously selected color 
    getTextColor.value = localStorage.getItem('Text Color'); 
    getBoxColor.value = localStorage.getItem('Box Color'); 
    getBGColor.value = localStorage.getItem('BG Color'); 
    getHighlight.value = localStorage.getItem('Highlight'); 
}

// Scores
function drawChart(dataTable) 
{
var data = google.visualization.arrayToDataTable(dataTable);

var options = {
  //title: 'Your Performance',
  curveType: 'function',
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

chart.draw(data, options);
}

//letters
function drawChart2(dataTable)
{
var data = google.visualization.arrayToDataTable(dataTable);

var options = {
    //title: 'Most Frequently Missed Characters',
    legend: { position: 'none' },
    hAxis: {
      title: 'Character'
    },
    vAxis: {
      title: 'Misses'
    }
  };

var chart = new google.visualization.ColumnChart(
    document.getElementById('chart_div'));

chart.draw(data, options);
}


//most frequently missed characters, the missedCharacters array is organized as follows [[char,int],[char,int],...]. 
//sets mostFreqChars to the top ten most frequently missed characters
function mostFreqMissed ()
{
    let p = 1; 
    console.log('Missed Characters' +missedCharacters); 
    while (p < 11 && p < missedCharacters.length)
    {
        let q = 2; 
        let placeHold = 1; 
        while (q < missedCharacters.length) 
        {
            if(missedCharacters[q][1] > missedCharacters[placeHold][1])
            {
                placeHold = q; 
            }
            q++; 
        }
        
        let n = missedCharacters[placeHold][0]; 
        let m = missedCharacters[placeHold][1];
        missedCharacters[placeHold][1] = 0;
        if(n === '' || n === undefined || n === ' ')
        {
            n = 'Space'; 
        } 
        //console.log('n ' + n); 
        //console.log('m' + m);
        mostMissed.push([n,m]);
        //console.log('Most Missed ' + mostMissed);
        p++; 
    }
}
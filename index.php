<?

  if (isset($_GET['debug'])) {
    define("DEBUG_MODE", true);
  } else {
    define("DEBUG_MODE", false);
  }
  
  mb_internal_encoding("UTF-8");
  
  // http://www.youtube.com/watch?v=s1I7D5MsSvU // Happy alarm
  // http://www.youtube.com/watch?v=z9VYuP5_A1g&t=1m11s // Veiron i Ottan
  // http://www.youtube.com/watch?v=OyBSrBqogPY // Groundhog Day
  // http://www.youtube.com/watch?v=Iw8jUbNebvE // Sweet 'n' chips
  // http://www.youtube.com/watch?v=bCkGav64H9k // luciatåg dagis
  // http://www.youtube.com/watch?v=Mk0FyZqNp5Q // finare luciatåg
  
  
  if (isset($_GET['alarm'])) {
    $url = $_GET['alarm'];
  } else {
    $url = 'http://www.youtube.com/watch?v=OyBSrBqogPY';
  }
  if (isset($_GET['time'])) {
    $time = $_GET['time'];
  } else {
    $time = "";
  }

?><?="<?"?>xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Alarm</title>
  <link rel="shortcut icon" href="favicon.ico" /> 
	<style type="text/css">
		body {
			background: #ffffff;
			color: #143857;
			font-family: "Arial", sans-serif;
		}
    
    body.dark {
			background: #000000;
			color: #808080;
			font-family: "Arial", sans-serif;
		}
    
    body.dark input,
    body.dark button {
      background: #000000;
      color: #808080;
      border: 1px solid #143857;
    }
    
    fieldset {
      border: none;
      padding: 0;
      margin: 0;
    }
    
    #main {
      text-align: center;
      width: 700px;
      margin: 0px auto;
      padding: 10px;
    }
    
    a {
      text-decoration: none;
      color: #143857;
    }
     
    a.toggle {
      color: #98abbc;
    }
    
    body.dark a.toggle {
      color: #0a1f31;
    }
    
    hr {
      background: none;
      border: none;
      margin-bottom: 50px;
    }
    
    #extra {
      display: none;
    }
	</style>
  <script type="text/javascript">
    <!--
    
    function updateClock() {
    
      var clockTime = new Date();
      var h = clockTime.getHours();
      var m = clockTime.getMinutes();
      var s = clockTime.getSeconds();
      h = zeroPad(h);
      m = zeroPad(m);
      s = zeroPad(s);
      document.getElementById('clockLabel').innerHTML = h + ":" + m + ":" + s;
      
      if (alarm && h + ":" + m == document.getElementById('alarmTimeInput').value) {
        if (document.getElementById('alarmUrlInput').value != "") {
          document.location = document.getElementById('alarmUrlInput').value;
          stopAlarm();
        } else {
          alert("ALARM!");
          stopAlarm();
        }
      }
      
    }
    
    function testAlarm() {
      if (document.getElementById('alarmUrlInput').value != "") {
        window.open(document.getElementById('alarmUrlInput').value);
      } else {
        alert("ALARM!");
      }
    }
    
    function initClock() {
      
      updateClock();
      
      if (document.getElementById('alarmTimeInput').value == '') {
        var alarmTime = new Date();
        alarmTime.setMinutes(alarmTime.getMinutes() + 2);
        var h = alarmTime.getHours();
        var m = alarmTime.getMinutes();
        h = zeroPad(h);
        m = zeroPad(m);
        
        document.getElementById('alarmTimeInput').value = h + ":" + m;
      }
    }
    
  
    function startAlarm() {
    
      alarm = true;
      
      if ((/^\d\d\:\d\d$/g).test(document.getElementById('alarmTimeInput').value)) {
        
        document.getElementById('statusLabel').innerHTML = 'på';
        document.getElementById('stopButton').style.display = 'inline';
        document.getElementById('startButton').style.display = 'none';
      } else {
        alert("Tiden måste va på formatet HH:MM, t.ex. 07:09");
      }
    }
    
    function stopAlarm() {
    
      alarm = false;
      
      document.getElementById('statusLabel').innerHTML = 'av';
      document.getElementById('stopButton').style.display = 'none';
      document.getElementById('startButton').style.display = 'inline';
    }
    
    function toggleExtra() {
      if (document.getElementById('extra').style.display != 'block') {
        document.getElementById('extra').style.display = 'block';
        document.getElementById('toggleExtraButton').innerHTML = "Fler funktioner";
      } else {
        document.getElementById('extra').style.display = 'none';
        document.getElementById('toggleExtraButton').innerHTML = "Fler funktioner";
      }
      return false;
    }

    function lightsOff() {
      document.body.className = 'dark';
      document.getElementById('lightsOffButton').style.display = 'none';
      document.getElementById('lightsOnButton').style.display = 'inline';
    }

    function lightsOn() {
      document.body.className = '';
      document.getElementById('lightsOffButton').style.display = 'inline';
      document.getElementById('lightsOnButton').style.display = 'none';
    }
    
    function setUrl(url) {
      document.getElementById('alarmUrlInput').value = url;
    }
    

    function saveLink() {
      var url = window.location.protocol + '//' +  window.location.hostname + window.location.pathname
        + '?alarm=' + escape(document.getElementById('alarmUrlInput').value)
        + '&time=' + escape(document.getElementById('alarmTimeInput').value);
      document.location = url;
    }

    function zeroPad(i) {      
      // add a zero in front of numbers<10
      if (i < 10)  {
        i = "0" + i;
      }
      return i;
    }
    
    var alarm = false;
    setInterval(updateClock, 1000 );
  
    -->
  </script>
 </head>

 <body onload="initClock()">

  <div id="main">
     
    <p>
      <img src="clock.png" alt="" />
    </p>
    
    <h1>Alarm</h1>
    
    <p>
      Klockan är <span id="clockLabel"></span>
    </p>
    
    <form action="">
      <fieldset>
        <p>
          Alarmtid:
          <input type="text" id="alarmTimeInput"  style="width: 70px;" value="<?= $time ?>" />
        </p>
        
        <p>
          Alarmlänk:
          <input type="text" id="alarmUrlInput" style="width: 320px;" value="<?= $url ?>" />
        </p>
        
        <p>
          <button id="startButton" type="button" onclick="startAlarm()">Starta</button>
          <button id="stopButton" type="button" onclick="stopAlarm()" style="display: none;">Stoppa</button>
        </p>
      </fieldset>
    </form>
      
    <p>
      Alarmet är <span id="statusLabel">av</span>
    </p>
    
    <hr />
    
    <p>
      <a href="#" id="toggleExtraButton" class="toggle" onclick="return toggleExtra()">Fler funktioner</a>
    </p>
    <div id="extra">
      <p>
        <button id="lightsOffButton" type="button" onclick="lightsOff()">Mörka ner sidan</button>
        <button id="lightsOnButton" type="button" onclick="lightsOn()" style="display: none;">Tänd sidan</button>
      </p>
      <p>
        <button id="testAlarmButton" type="button" onclick="testAlarm()">Testa alarmlänken</button>
      </p>
      <p>
        Alarmförslag: <select id="presetUrls" onchange="setUrl(this.value)">
          <option value="">Välj...</option>
          <option value="http://www.youtube.com/watch?v=OyBSrBqogPY">Groundhog Day</option>
          <option value="http://www.youtube.com/watch?v=z9VYuP5_A1g&amp;t=1m11s">Veiron i Ottan</option>
          <option value="http://www.youtube.com/watch?v=Iw8jUbNebvE">Sweet 'n' chips - God Morgon</option>
          <option value="http://www.youtube.com/watch?v=bCkGav64H9k">Luciatåg</option>
          <option value="http://www.youtube.com/watch?v=s1I7D5MsSvU">Happy Good Morning Alarm</option>
          <option value="http://www.youtube.com/watch?v=FoX7vd30zq8">Fabrikslarm</option>
          <option value="http://www.youtube.com/watch?v=KHy7DGLTt8g">Epic Sax Guy 10 hours</option>
        </select>
      </p>
      <p>
        <button id="saveLinkButton" type="button" onclick="saveLink()">Spara länk till valda inställningar</button>
      </p>
      <p>
        <a href="http://timer.vitkor.se/">Timer</a>
      </p>
    </div>
     
  </div>
	
 </body>
</html>
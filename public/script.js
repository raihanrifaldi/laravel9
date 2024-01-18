const recordBtn = document.querySelector(".record"),
  result = document.querySelector(".result"),
  saveBtn = document.querySelector(".save"),
  inputLanguage = document.querySelector("#language"),
  clearBtn = document.querySelector(".clear");



let SpeechRecognition =
  window.SpeechRecognition || window.webkitSpeechRecognition,
  recognition,
  recording = false;



// menambahkan language di menu option atau dropdown
function populateLanguages() {
  languages.forEach((lang) => {
    const option = document.createElement("option");
    option.value = lang.code;
    option.innerHTML = lang.name;
    inputLanguage.appendChild(option);
  });
}



// memanggil function untuk language atau bahasaa
populateLanguages();



function speechToText() {
  try {
    recognition = new SpeechRecognition();
    recognition.lang = inputLanguage.value;
    recognition.interimResults = true;
    recordBtn.classList.add("recording");
    recordBtn.querySelector("p").innerHTML = "Listening...";
    recognition.start();
    recognition.onresult = (event) => {
      const speechResult = event.results[0][0].transcript;
      // menampilkan hasil atau result di tag p 
      if (event.results[0].isFinal) {
        result.innerHTML += " " + speechResult;
        result.querySelector("p").remove();

      } else {
        //jika tag p nya tidak ada maka akan dibuat tag p
        if (!document.querySelector(".interim")) {
          const interim = document.createElement("p");
          interim.classList.add("interim");
          result.appendChild(interim);
        }
        //mengganti isi dari class interim menjadi speech result 
        document.querySelector(".interim").innerHTML = " " + speechResult;
      }
      // menghidupkan lagi tombol save button jika sudah ada speech result-nya
      saveBtn.disabled = false;
    };
    recognition.onspeechend = () => {
      // saat speechnya mau selesai akan memanggil kembali functionnya untuk kembali mendeteksi speech
      speechToText();
    };
    recognition.onerror = (event) => {
      stopRecording();
      if (event.error === "no-speech") {
        alert("No speech was detected. Stopping...");
      } else if (event.error === "audio-capture") {
        alert(
          "No microphone was found. Ensure that a microphone is installed."
        );
      } else if (event.error === "not-allowed") {
        alert("Permission to use microphone is blocked.");
      } else if (event.error === "aborted") {
        alert("Listening Stopped.");
      } else {
        alert("Error occurred in recognition: " + event.error);
      }
    };
  } catch (error) {
    recording = false;

    console.log(error);
  }
}


// saaat mengklik record button jika belum recording maka akan record namun jika sedang record maka akan stop
recordBtn.addEventListener("click", () => {
  if (!recording) {
    speechToText();
    recording = true;
  } else {
    stopRecording();
  }
});



// function untuk stop recording 
function stopRecording() {
  recognition.stop();
  recordBtn.querySelector("p").innerHTML = "Start Listening";
  recordBtn.classList.remove("recording");
  recording = false;
}



// function save untuk mengirim speech result kepada form inputan
function save() {
  const text = result.innerText;
  document.getElementById("speechs").value = text;
  document.getElementById("speechsr").value = text;

  element.style.display = "none";
  document.body.appendChild(element);
  element.click();
  document.body.removeChild(element);

  // document.getElementById("speech").value = result.innerText;
  // const text = result.innerText;

  // console.log(text)
  // const filename = "speech.txt";
  // const element = document.createElement("a");
  // element.setAttribute(
  //   "href",
  //   "data:text/plain;charset=utf-8," + encodeURIComponent(text)
  // );
  // element.setAttribute("download", filename);
  // element.style.display = "none";
  // document.body.appendChild(element);
  // element.click();
  // document.body.removeChild(element);
}



// membuat fungsi dari save button dengan memanggil function save
saveBtn.addEventListener("click", save);



// membuat fungsi dari clear button yang akan mengubah result menjadi kosong dan membuat save button menjadi disable
clearBtn.addEventListener("click", () => {
  result.innerHTML = "";
  saveBtn.disabled = true;
});

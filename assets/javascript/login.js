const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelector(".btn-open");
const closeModalBtn = document.querySelector(".btn-close");
const navigateSignup = document.querySelector(".navigate--signup");
const navigateSignin = document.querySelector(".navigate--signin");
const signup = document.querySelector(".signup");
const signin = document.querySelector(".signin");
// const addPlaylist = document.querySelector("sidebar__add-playlist");
const navigateToSignup = function () {
  signup.classList.remove("hidden");
  signin.classList.add("hidden");
};
const navigateToSignin = function () {
  signup.classList.add("hidden");
  signin.classList.remove("hidden");
};
navigateSignup.addEventListener("click", navigateToSignup);
navigateSignin.addEventListener("click", navigateToSignin);
const openModal = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};
openModalBtn.addEventListener("click", openModal);
const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

var loginSuccess = false;
document
  .getElementById("login-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    var url = "./assets/server/login.php";
    var formData = new FormData(document.getElementById("login-form"));
    xhr.open("POST", url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        var jsonResponse = JSON.parse(response);
        if (jsonResponse.success) {
          var username = jsonResponse.username;
          document.querySelector(".profile__name").textContent = username;
          var message = jsonResponse.message;
          document.querySelector(".profile__img").style.display = "block";
          modal.classList.add("hidden");
          overlay.classList.add("hidden");
          loginSuccess = true;
          printMess();
          document.querySelector(".btn-open").textContent = "Đăng xuất";
          document.getElementById("login-form").reset();
        } else {
          var message = jsonResponse.message;
          document.getElementById("login-message").innerHTML = message;
          setTimeout(function () {
            document.getElementById("login-message").innerHTML = "";
          }, 1500);
        }
      }
    };
    xhr.send(formData);
  });

document.querySelector(".btn-open").addEventListener("click", function () {
  if (loginSuccess) {
    document.querySelector(".profile__img").style.display = "none";
    document.querySelector(".profile__name").textContent = "";
    document.querySelector(".btn-open").textContent = "Đăng nhập";
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
    loginSuccess = false;
    printMess();
  }
});

function printMess() {
  const toatMain = $("#toast");
  if (toatMain) {
    const toast = document.createElement("div");
    toast.classList.add("toast");
    if (loginSuccess) {
      toast.innerHTML = `
                <div class="toast__item">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>Đăng nhập thành công!</span>
                </div>
            `;
    } else {
      toast.innerHTML = `
                <div class="toast__item">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>Đăng xuất thành công!</span>
                </div>
            `;
    }
    toatMain.appendChild(toast);
    setTimeout(function () {
      toatMain.removeChild(toast);
    }, 3000);
  }
}

document
  .getElementById("register-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    var url = "./assets/server/register.php";
    var formData = new FormData(document.getElementById("register-form"));
    xhr.open("POST", url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        var jsonResponse = JSON.parse(response);
        var message = jsonResponse.message;
        document.getElementById("register-message").innerHTML = message;
        document.getElementById("register-form").reset();
      }
    };
    xhr.send(formData);
  });

const input = document.querySelector("#search");
const audioElement = document.querySelector("#audio");
input.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    const searchTerm = event.target.value; // Lấy giá trị được nhập bởi người dùng
    const url = `https://itunes.apple.com/search?term=${searchTerm}&entity=song&limit=16`;

    fetch(url)
      .then((response) => response.json())
      .then((data) => {
        const songElements = document.querySelectorAll(".songs-item");

        const songElementsToReplace = Array.from(songElements).slice(0);

        data.results.forEach((song, index) => {
          const songElement = songElementsToReplace[index];
          // Cập nhật nội dung của thẻ HTML với dữ liệu mới
          songElement.querySelector(
            ".songs-item-left-img"
          ).style.backgroundImage = `url(${song.artworkUrl100})`;
          songElement.querySelector(".songs-item-left-body-name").textContent =
            song.trackName;
          songElement.querySelector(
            ".songs-item-left-body-singer"
          ).textContent = song.artistName;
          songElement.querySelector(".songs-item-center span").textContent =
            song.trackName;
          audioElement.src = song.previewUrl;
        });

        const newSongsData = data.results.map((song) => ({
          background: song.artworkUrl100,
          name: song.trackName,
          singer: song.artistName,
          pathSong: song.previewUrl,
          duration: "00:30", // API không cung cấp thông tin về thời lượng bài hát
        }));

        app.songsData.splice(0, 16, ...newSongsData);
      });
  }
});

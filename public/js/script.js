/*------ Definition ------*/
const root = document.querySelector(":root");
const html = document.querySelector("html");
const header = document.getElementById("header");

/*------ TopButton and Navigations------*/
const topButton = document.getElementById("top-button");
const navs = document.querySelectorAll("[data-nav]");
const sections = document.querySelectorAll("section");
const numOfNavs = navs.length;

// メインビジュアル以降トップボタンを表示・ナビの色変化
const topElement = document.getElementById("MV");
const callback = (entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      topButton.style.setProperty("opacity", "0");
      navs[0].classList.remove("nav");
    } else {
      topButton.style.setProperty("opacity", "1");
      navs[0].classList.add("nav");
    }
  });
};
const io = new IntersectionObserver(callback);
io.observe(topElement);

// スクロール位置によるナビの色変化
for (let i = 0; i < numOfNavs; i++) {
  const options = {
    root: null,
    rootMargin: "-50% 0px",
    threshold: 0,
  };

  const callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        navs[i].classList.add("nav");
      } else {
        navs[i].classList.remove("nav");
      }
    });
  };

  const io = new IntersectionObserver(callback, options);
  io.observe(sections[i]);
}

/*------ Modal ------*/
const modals = document.querySelectorAll("[data-modal]");
const buttonsOpenModal = document.querySelectorAll("[data-open-modal]");
const buttonsCloseModal = document.querySelectorAll("[data-close-modal]");
const getModalElm = (name) => {
  return document.querySelector(`[data-modal=${name}]`);
};
const handle = (e) => {
  e.preventDefault();
};
const open = (elm) => {
  const headerHeight = header.clientHeight;
  header.style.transform = `translateY(-${headerHeight}px)`;
  html.style.overflow = "hidden";
  elm.style.visibility = "visible";
  elm.style.opacity = "1";
};
const close = (elm) => {
  header.style.transform = "translateY(0)";
  html.style.overflow = null;
  elm.style.visibility = "hidden";
  elm.style.opacity = "0";
};

for (let i = 0; i < modals.length; i++) {
  // Moreが押されたとき
  buttonsOpenModal[i].addEventListener("click", () => {
    open(getModalElm(buttonsOpenModal[i].dataset.openModal));
  });

  // closeボタンが押されたとき
  buttonsCloseModal[i].addEventListener("click", () => {
    close(getModalElm(buttonsCloseModal[i].dataset.closeModal));
  });

  // モーダルの外側がクリックされたときもclose
  modals[i].addEventListener("click", (e) => {
    const modalClicked = getModalElm(modals[i].dataset.modal);
    if (e.target == modalClicked) {
      close(modalClicked, e);
    }
  });
}

const linksInModal = document.querySelectorAll("[data-link-in-modal]");

// モーダル内のリンクが押されたとき
linksInModal.forEach((Elm) => {
  Elm.addEventListener("click", () => {
    close(getModalElm(Elm.dataset.linkInModal));
  });
  Elm.addEventListener("touchend", () => {
    close(getModalElm(Elm.dataset.linkInModal));
  });
});

/*------- Content Two Cols List -------*/
// リストが偶数個のとき、下から２番目のborder-bottomを消す
const twoColsLists = document.querySelectorAll(".content-two-col-list");
for (i = 0; i < twoColsLists.length; i++) {
  const len = twoColsLists[i].childElementCount;
  if (len % 2 == 0) {
    twoColsLists[i].children[len - 2].style.setProperty(
      "border-bottom",
      "none"
    );
  }
}

/*------ Submit Contact Form ------*/
const contactButton = document.getElementById("contact-submit");
const contactForm = document.getElementById("contact-form");
const contactResult = document.getElementById("contact-submit-result");
const csrf = document.head.querySelector("[name=csrf-token][content]").content;

const sumbit = (formData) => {
  fetch("/submit", {
    method: "POST",
    credentials: "include",
    headers: {
      "X-CSRF-TOKEN": csrf,
    },
    body: formData,
  })
    .then((res) => res.json())
    .then(() => {
      contactForm.name.value = "";
      contactForm.email.value = "";
      contactForm.comment.value = "";
      contactResult.textContent = "送信しました";
      contactResult.style.color = "var(--accent)";
    })
    .catch((err) => {
      console.log(err);
      contactResult.textContent = "送信に失敗しました";
      contactResult.style.color = "var(--err)";
    });
};

contactButton.addEventListener("click", (e) => {
  e.preventDefault();
  const name = contactForm.name.value;
  const email = contactForm.email.value;
  const comment = contactForm.comment.value;
  const formData = new FormData(contactForm);
  const emailRegex =
    /^[A-Za-z0-9][A-Za-z0-9_.-]*@[A-za-z0-9-]+(?:\.[A-Za-z0-9-]+)+$/;
  let err = "";

  if (comment.length === 0) {
    err = "内容は必須項目です";
  } else if (comment.length > 200) {
    err = "内容は200文字以内です";
  }

  if (email.length === 0) {
    err = "Eメールアドレスは必須項目です";
  } else if (!email.match(emailRegex)) {
    err = "Eメールアドレスの形式が正しくありません";
  }

  if (name.length === 0) {
    err = "お名前は必須項目です";
  } else if (name.length > 50) {
    err = "お名前は50文字以内です";
  }

  if (err) {
    contactResult.textContent = err;
    contactResult.style.color = "var(--err)";
  } else {
    contactResult.textContent = "送信しています..";
    contactResult.style.color = "var(--accent)";

    sumbit(formData);
  }
});

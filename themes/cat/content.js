(function main() {
  const DIRECTIONS = {
    TOP: 3,
    RIGHT: 1,
    BOTTOM: 2,
    LEFT: 4,
  };

  const CSS_CLASSES = {
    IMAGE: "annoying-cat-image",
    SHOW: "annoying-cat-image-show",
    HIDE: "annoying-cat-image-hide",
  };

  addStyles();

  const img = createImage();
  const showUpCoolDown = 2 * /*60 **/ 1000;
  const slideOutRandomly = createSlideOutFunction(img, showUpCoolDown);
  img.addEventListener("mouseenter", slideOutRandomly);

  slideOutRandomly();

  function addStyles() {
    const style = document.createElement("style");
    style.innerHTML = `
        .${CSS_CLASSES.IMAGE} {
            position: fixed;
            left: -100vw;
            top: -100vh;
            z-index: ${Number.MAX_SAFE_INTEGER}
        }
        
        .${CSS_CLASSES.HIDE} {
            transition-property: top, bottom, left, right;
            transition-duration: 0.2s;
            transition-timing-function: ease-out;
        }
        
        .${CSS_CLASSES.SHOW} {
            transition-property: top, bottom, left, right;
            transition-duration: 1s;
            transition-timing-function: ease-out;
        }
    `;
    document.head.appendChild(style);
  }

  function createImage() {
    const el = document.createElement("img");
    el.src = getImageSource();
    el.classList.add(CSS_CLASSES.IMAGE);
    document.body.appendChild(el);
    return el;
  }

  function getImageSource() {
    return chrome.runtime.getURL("assets/annoying-cat.png");
  }

  function getRandomNumber(max, min = 1) {
    const minCeiled = Math.ceil(min);
    const maxFloored = Math.floor(max);
    return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled);
  }

  function getDirection() {
    return getRandomNumber(4);
  }

  function show(slideCb) {
    setTimeout(() => {
      img.classList.add(CSS_CLASSES.SHOW);
      img.style.visibility = "visible";
      slideCb();
    }, 1000);
  }

  function slideFromTop(img) {
    img.style.visibility = "hidden";
    img.style.transformOrigin = "unset";
    img.style.top =
      -1 * window.getComputedStyle(img).height.replace("px", "") + "px";
    img.style.left =
      getRandomNumber(
        window.innerWidth -
          window.getComputedStyle(img).width.replace("px", ""),
      ) + "px";
    img.style.transform = "scaleY(-1)";
    show(() => {
      img.style.top = "0";
    });
  }

  function slideFromBottom(img) {
    img.style.visibility = "hidden";
    img.style.transformOrigin = "unset";
    img.style.top = "unset";
    img.style.left =
      getRandomNumber(
        window.innerWidth -
          window.getComputedStyle(img).width.replace("px", ""),
      ) + "px";
    img.style.transform = "scaleY(1)";
    img.style.bottom =
      -1 * window.getComputedStyle(img).height.replace("px", "") + "px";
    show(() => {
      img.style.bottom = "0";
    });
  }

  function slideFromLeft(img) {
    img.style.visibility = "hidden";
    img.style.transformOrigin = "left top";
    img.style.top =
      getRandomNumber(
        window.innerHeight -
          window.getComputedStyle(img).width.replace("px", ""),
      ) + "px";
    img.style.transform = "rotate(90deg)";
    img.style.left =
      -1 * window.getComputedStyle(img).height.replace("px", "") + "px";
    show(() => {
      img.style.left = window.getComputedStyle(img).height;
    });
  }

  function slideFromRight(img) {
    img.style.visibility = "hidden";
    img.style.transformOrigin = "right top";
    img.style.top =
      getRandomNumber(
        window.innerHeight -
          window.getComputedStyle(img).width.replace("px", ""),
      ) + "px";
    img.style.left = "unset";
    img.style.transform = "rotate(-90deg)";
    img.style.right =
      -1 * window.getComputedStyle(img).height.replace("px", "") + "px";
    show(() => {
      img.style.right = window.getComputedStyle(img).height;
    });
  }

  function slideOut(img, dir) {
    img.classList.remove(CSS_CLASSES.HIDE);
    img.classList.add(CSS_CLASSES.SHOW);
    if (dir === DIRECTIONS.TOP) {
      slideFromTop(img);
    } else if (dir === DIRECTIONS.BOTTOM) {
      slideFromBottom(img);
    } else if (dir === DIRECTIONS.LEFT) {
      slideFromLeft(img);
    } else if (dir === DIRECTIONS.RIGHT) {
      slideFromRight(img);
    }
  }

  function reset(img, dir) {
    img.classList.remove(CSS_CLASSES.SHOW);
    img.classList.add(CSS_CLASSES.HIDE);
    const offset =
      -1 * window.getComputedStyle(img).height.replace("px", "") + "px";
    if (dir === DIRECTIONS.TOP) {
      img.style.top = offset;
    } else if (dir === DIRECTIONS.BOTTOM) {
      img.style.bottom = offset;
    } else if (dir === DIRECTIONS.LEFT) {
      img.style.left = offset;
    } else if (dir === DIRECTIONS.RIGHT) {
      img.style.right = offset;
    }
  }

  function createSlideOutFunction(img, showUpCoolDown) {
    let slideDirection;

    return () => {
      reset(img, slideDirection);
      setTimeout(() => {
        slideDirection = getDirection();
        slideOut(img, slideDirection);
      }, showUpCoolDown);
    };
  }
})();

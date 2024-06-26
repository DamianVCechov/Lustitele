const matrixRain = new MatrixRain(
				element = document.getElementById("canvas"),
				width = window.innerWidth,
				height = window.innerHeight,
				charList = [
					'0','1','2','3','4','5','6','7','8','9',
					'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
					'+','-','*','=','<','>',':','.',
					'ﾊ','ﾐ','ﾋ','ｰ','ｳ','ｼ','ﾅ','ﾓ','ﾆ','ｻ','ﾜ','ﾂ','ｵ','ﾘ','ｱ','ﾎ','ﾃ','ﾏ','ｹ','ﾒ','ｴ','ｶ','ｷ','ﾑ','ﾕ','ﾗ','ｾ','ﾈ','ｽ','ﾀ','ﾇ','ﾍ'
				],
				red = 153, green = 000, blue = 204,
				randomColors = false,
				flowRate = 1,
				fps = 15,
			);
			window.addEventListener("resize", () => {
				matrixRain.setCanvasDimensions(window.innerWidth, window.innerHeight);
			});

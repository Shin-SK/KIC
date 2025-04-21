window.addEventListener('load', function() {
	const loader = document.getElementById('loader');
  
	// ローダーフェードアウト
	gsap.to(loader, {
	  opacity: 0,
	  duration: 0.5,
	  onComplete: function() {
		loader.style.display = 'none';
		ScrollTrigger.refresh();
  
		// // --- ここで最初の3セクションを1スクロールずつ移動する仕組みを実装 ---
		// setupSnapSections();
  
		// --- あとは普通のScrollTriggerアニメなど自由に書く ---
		setupAnimations();
	  }
	});
  });
  

  function setupSnapSections() {
	// ウィンドウ幅が768px未満（スマホ）ならスナップ機能は使わずにreturn
	if (window.innerWidth < 768) {
	  return;
	}
  
	// 「.snap-sections > section」だけを対象にする
	const snapSections = document.querySelectorAll('.snap-sections > section');
	let currentIndex = 0;
	let isScrolling = false;
  
	function onWheel(e) {
	  e.preventDefault();
	  if (isScrolling) return;
  
	  // 下方向スクロール
	  if (e.deltaY > 0) {
		currentIndex++;
		if (currentIndex >= snapSections.length - 1) {
		  currentIndex = snapSections.length - 1;
		  // 最後のセクションに到達したら、これ以上は強制スクロールしない
		  removeWheelListener();
		}
	  } else {
		// 上方向スクロール
		currentIndex--;
		if (currentIndex < 0) currentIndex = 0;
	  }
  
	  isScrolling = true;
	  gsap.to(window, {
		duration: 1,
		scrollTo: {
		  y: snapSections[currentIndex],
		  autoKill: false
		},
		ease: "power1.inOut",
		onComplete: () => {
		  isScrolling = false;
		}
	  });
	}
  
	function removeWheelListener() {
	  window.removeEventListener('wheel', onWheel, { passive: false });
	}
  
	window.addEventListener('wheel', onWheel, { passive: false });
  }
  
  
  
  function setupAnimations() {
	gsap.registerPlugin(ScrollTrigger);
  
	ScrollTrigger.matchMedia({
	  // 幅768px以上（PC向け）
	  "(min-width: 768px)": function() {
		// PC向けの .kv アニメーション
		let tl = gsap.timeline();
		tl.to('.kv .left', {
			x: "100%",
			duration: 1,
			ease: 'power3.out'
		  }, 0)
		  .to('.kv .right', {
			x: "30%",
			duration: 1,
			ease: 'power3.out'
		  }, 0)
		  .from('.kv .t1', {
			y: 50, 
			opacity: 0,
			duration: 0.5
		  })
		  .from('.kv .t2', {
			y: 50, 
			opacity: 0,
			duration: 0.5
		  })
		  .from('.kv .t3', {
			y: 50, 
			opacity: 0,
			duration: 0.5
		  });
		  
		  const tlMessage = gsap.timeline({
			scrollTrigger: {
			  trigger: '.message',
			  start: 'top center',
			  end: 'bottom bottom',
			}
		  });
		  tlMessage
			.from('.message .logo', {
			  y: 0,
			  opacity: 0,
			  scale: 0.5,
			  rotation: 360,
			  duration: 1.0,
			  ease: 'back.out(1.3)'
			})
			.from('.message .text', {
			  y: 50,
			  opacity: 0,
			  duration: 1,
			  ease: 'power3.out'
			}, '+=0.2');
	  },
  
	  // 幅768px未満（スマホ向け）
	  "(max-width: 767px)": function() {
		// SP向けの .kv アニメーション
		let tl = gsap.timeline();
		tl.to('.kv .left', {
			x: 0,
			duration: 1,
			opacity: 1,
			ease: 'power2.out'
		  })
		  .from('.kv .t1, .kv .t2, .kv .t3', {
			y: 50,
			opacity: 0,
			duration: 1,
			stagger: 0.2,
			ease: 'power2.out'
		  });
		
		  const tlMessage = gsap.timeline({
			scrollTrigger: {
			  trigger: '.message',
			  start: 'top center',
			  end: 'bottom bottom',
			}
		  });
		  tlMessage
			.from('.message .logo', {
			  y: 0,
			  opacity: 0,
			  scale: 0.5,
			  rotation: 360,
			  duration: 1.0,
			  ease: 'back.out(1.3)'
			})
			.from('.message .text', {
			  y: 50,
			  opacity: 0,
			  duration: 1,
			  ease: 'power3.out'
			}, '+=0.2');
	  }
	});
  

  
	const tlPartner = gsap.timeline({
	  scrollTrigger: {
		trigger: '.partner',
		start: 'top top',
		end: 'bottom bottom',
	  }
	});
	tlPartner.from('.partner .item', {
	  y: 0,
	  opacity: 0,
	  scale: 0.5,
	  duration: 1.0,
	  ease: 'back.out(1.3)',
	  stagger: 0.2 
	});
  
	// aboutセクションのアニメーション
	const tlAbout = gsap.timeline({
	  scrollTrigger: {
		trigger: '.about',
		start: 'top center',
		end: 'bottom bottom'
	  }
	});
	tlAbout
	  // box1：左→右
	  .from('.about__wrap .box1', {
		x: -50,
		opacity: 0,
		duration: 0.5,
		ease: 'power1.inOut'
	  })
	  // box2：上→下
	  .from('.about__wrap .box2', {
		y: -50,
		opacity: 0,
		duration: 0.5,
		ease: 'power1.inOut'
	  })
	  // box3：右→左
	  .from('.about__wrap .box3', {
		x: 50,
		opacity: 0,
		duration: 0.5,
		ease: 'power1.inOut'
	  })
	  // box4：下→上
	  .from('.about__wrap .box4', {
		y: 50,
		opacity: 0,
		duration: 0.5,
		ease: 'power1.inOut'
	  });



	const tlVoice = gsap.timeline({
		scrollTrigger: {
		  trigger: '.voice',
		  start: 'top center',
		  end: 'bottom bottom'
		}
	  });
	  tlVoice
	  .from('.voice__wrap .box1', {
		y: 50,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut",
	  })
	  .from('.voice__wrap .box2', {
		y: 50,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut",
	  })
	  .from('.voice__wrap .box3', {
		y: 50,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut",
	  });



	const tlCompany = gsap.timeline({
	  scrollTrigger: {
		trigger: '.company',
		start: 'top center',
		end: 'bottom bottom'
	  }
	});
	tlCompany.from('.company__wrap', {
	  y: 50,
	  opacity: 0,
	  ease: "power1.inOut",
	});
  
	const tlContact = gsap.timeline({
	  scrollTrigger: {
		trigger: '.contact',
		start: 'top center',
		end: 'bottom bottom'
	  }
	});
	tlContact.from('.contact__wrap', {
	  y: 50,
	  opacity: 0,
	  duration: 0.5,
	  ease: "power1.inOut",
	});
  
	const tlfooter = gsap.timeline({
	  scrollTrigger: {
		trigger: '.footer',
		start: 'bottom bottom',
		end: 'bottom bottom',
	  }
	});
	tlfooter.from('.footer .logo', {
	  y: 0,
	  opacity: 0,
	  scale: 0.5,
	  rotation: 360,
	  duration: 1.0,
	  ease: 'back.out(1.3)'
	});
  }
  
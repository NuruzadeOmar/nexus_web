const handleScroll = (e) => {
  const el = document.getElementsByClassName('sticky')[0];
  if (window.scrollY > 100) {
    el.classList.add('stickyShow');
  } else {
    el.classList.remove('stickyShow');
  }

  if (window.scrollY > 100 && window.scrollY < 200) {
    const cardBody = document.getElementById('aboutBody');
    cardBody.style.top = `${-(window.scrollY - 100)}px`;
  }

  if (window.scrollY >= 200) {
    const cardBody = document.getElementById('aboutBody');
    cardBody.style.top = `-100px`;
  }

  if (window.scrollY <= 100) {
    const cardBody = document.getElementById('aboutBody');
    cardBody.style.top = `0px`;
  }
};

window.addEventListener('scroll', handleScroll);
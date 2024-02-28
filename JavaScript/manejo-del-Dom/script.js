document.body.style.backgroundColor = 'pink';


const animation = () => {
  if (document.body.style.backgroundColor === 'pink') {
    document.body.style.backgroundColor = 'skyblue';
  } else {
    document.body.style.backgroundColor = 'orange';
  }
};

setInterval(animation, 1000);

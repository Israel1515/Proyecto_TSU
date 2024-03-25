const $linksTitle = document.querySelectorAll('.links-title');
const $linksList = document.querySelectorAll('.links-list');

function toggleList(list) {
  if (list.style.maxHeight != '19vh') {
    list.style.maxHeight = '19vh';
  } else {
    list.style.maxHeight = '0vh';
  }
}

$linksTitle[0].addEventListener('click', e => { 
  toggleList($linksList[0])
});

$linksTitle[1].addEventListener('click', e => { 
  toggleList($linksList[1])
});


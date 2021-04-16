const list = document.createElement('ul');
const info = document.createElement('p');
const html = document.querySelector('html')

info.textContent = 'test info'

document.body.appendChild(info);
document.body.appendChild(list);

html.onclick = function () {
  const listItem = document.createElement('li');
  const listContent = prompt('create');
  listItem.textContent = listContent;
  list.appendChild(listItem);

  listItem.onclick = function (e) {
    e.stopPropagation();
    const listContent = prompt('prompt');
    this.textContent = listContent;
  }
}

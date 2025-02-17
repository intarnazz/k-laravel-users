export async function GetPage(url, u) {
  const token = sessionStorage.getItem('token')
  if (!token) {
    window.location.href = `${url}authorization`
  }
  return await fetch(`${url}api/${u}`, {
    method: 'GET', headers: {
      'Content-Type': 'application/json', Authorization: `Bearer ${sessionStorage.getItem('token')}`
    }
  })
    .then((response) => response.text()) // Получаем текстовый ответ
    .then((html) => {
      const doc = new DOMParser().parseFromString(html, 'text/html');
      document.body.innerHTML = doc.body.innerHTML;
    })
    .catch((e) => {
      throw e
    })
}

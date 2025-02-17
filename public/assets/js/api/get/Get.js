export async function Get(url, obj = {}) {
  return await fetch(`${url}`, {
    method: 'GET',
    headers: {
      // skip: obj.skip ?? 0,
      // take: obj.take ?? 6,
    }
  })
    .then((response) => response.json())
    .then((json) => {
      return json
    })
    .catch((e) => {
      throw e
    })
}

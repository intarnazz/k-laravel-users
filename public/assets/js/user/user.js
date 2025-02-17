export const user = () => {
  return sessionStorage.getItem('token') != undefined
}
export const logout = () => {
  sessionStorage.removeItem('token')
  window.location.href = '/'
}

import * as GetModel from './get/Get.js'

const Get = GetModel.Get

import * as PostModel from './post/Post.js'

const Post = PostModel.Post

// import * as PostSendFileModel from './post/PostSendFile.js'
// const PostSendFile = PostSendFileModel.PostSendFile

import * as GetPageModel from './get/GetPage.js'

const GetPage = GetPageModel.GetPage

const URL = 'http://localhost:8000/'
const API_URL = `${URL}api/`


export const page = async (u) => {
  GetPage(URL, u)
}

export const auth = async (url, body) => {
  const res = await Post(`${API_URL}${url}`, body)
  if (res.success) {
    sessionStorage.setItem('token', res.token)
  }
  return res
}

export const reg = async (body) => {
  return await auth(`registration`, body)
}

export const log = async (body) => {
  return await auth(`authorization`, body)
}

const Push = async (url, method, data) => {
  return await Post(`${API_URL}${url}/${data.id}`, {_method: method, ...data})
}

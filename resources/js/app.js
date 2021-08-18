require('./bootstrap');


import ReactDOM from 'react-dom';
import HomeIndex from './components/HomeIndex';
import PostsIndex from './components/PostsIndex';
import UsersIndex from './components/UsersIndex';


if (document.getElementById('homeindex')) {
  ReactDOM.render(<HomeIndex />, document.getElementById('homeindex'));
}

if (document.getElementById('postsindex')) {
    ReactDOM.render(<PostsIndex />, document.getElementById('postsindex'));
  }


  if (document.getElementById('usersindex')) {
    ReactDOM.render(<UsersIndex />, document.getElementById('usersindex'));
  }

 

// // require('./Posts/BlogPostView');
// // require('./Users/ShowUserView');
// // require('./components/Index');
// require('./components/Example');
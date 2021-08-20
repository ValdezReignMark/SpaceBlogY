require('./bootstrap');


import ReactDOM from 'react-dom';
import HomeIndex from './components/HomeIndex';
import PostsIndex from './components/PostsIndex';
import UsersIndex from './components/UsersIndex';
import AuthorsIndex from './components/AuthorsIndex';


if (document.getElementById('homeindex')) {
  const props = Object.assign({}, document.getElementById('homeindex').dataset);
  ReactDOM.render(<HomeIndex {...props}/>, document.getElementById('homeindex'));
}

if (document.getElementById('postsindex')) {
  const props = Object.assign({}, document.getElementById('postsindex').dataset);
    ReactDOM.render(<PostsIndex  {...props} />, document.getElementById('postsindex'));
  }


  if (document.getElementById('usersindex')) {
    ReactDOM.render(<UsersIndex />, document.getElementById('usersindex'));
  }

  if (document.getElementById('authorsindex')) {
    const props = Object.assign({}, document.getElementById('authorsindex').dataset);
    ReactDOM.render(<AuthorsIndex  {...props} />, document.getElementById('authorsindex'));
  }

 

// // require('./Posts/BlogPostView');
// // require('./Users/ShowUserView');
// // require('./components/Index');
// require('./components/Example');
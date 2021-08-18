import { CircularProgress, AppBar, Paper, Table, TableCell, Grid, Toolbar, Typography, Box, Avatar, TableContainer, TableHead, TableRow, TableBody } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import { contains } from 'jquery';
import api from '../config/apisauce';

const BlogPostView = () => {
    const [blogPosts, setBlogPosts] = useState([]);

    const fetchBlogPosts = () => {
        api.get('/posts').then((result) => {
            console.log('posts', result.data);
            setBlogPosts(result.data);
        });
    }

// function 
   

useEffect(() => {
        fetchBlogPosts();
    }, []);
        
    // Exporting Default Navbar to the App.js File
   

    return(
        <div >
        <Header/>
        <Grid>
            {/* {
                blogPosts && (
                    <pre>
                        { JSON.stringify(blogPosts, null, 2) }
                    </pre>
                )
            } */}
        <TableContainer component={Paper}>
            <Table className="#" aria-label="simple table">
            <TableHead>
                <TableRow>
                <TableCell>Author</TableCell>
                <TableCell align="right">Title</TableCell>
                <TableCell align="right">Date</TableCell>
                <TableCell align="right">Published At</TableCell>
                <TableCell align="right">Created At</TableCell>  
                </TableRow>
            </TableHead>
            {
                blogPosts.length != 0 ?
                blogPosts.map((data) => {
                   return (
                    <TableRow key={data.name}>
                        <TableCell component="th" scope="row">
                        {data.title}
                        </TableCell>
                        <TableCell align="right">{data.user_name}</TableCell>
                        <TableCell align="right">{data.published_at}</TableCell>
                        <TableCell align="right">{data.created_at}</TableCell>
                        <TableCell align="right">{data.updated_at}</TableCell>
                    </TableRow>
                   ) 
                })
                :
                undefined
            }
      


        
            </Table>


        </TableContainer>
        </Grid>
      </div>

        


    )
}

export default BlogPostView;

if (document.getElementById('blogpostview')) {
  ReactDOM.render(<BlogPostView />, document.getElementById('blogpostview'));
}
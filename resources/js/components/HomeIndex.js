import { CircularProgress, AppBar, Button, Paper, Table, TableCell, Grid, Toolbar, Typography, Box, Avatar, TableContainer, TableHead, TableRow, TableBody, Dialog, DialogContent, TextField, DialogActions } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import Footer from '../HeaderAndFooter/Footer';
import { contains } from 'jquery';
import apisauce from '../config/apisauce';

import { positions } from '@material-ui/system';

const useStyles = makeStyles((theme) => ({
    table: {
        minWidth: 650,
    },
    tableContainer: {
        borderRaduis: 15,

        maxWidth: '50%',
   
        marginLeft: '35%'
      
    }
    // tableHeadercell:{
    //     fontWeight: 'bold',
    //     backgroundColor: theme.palette.primary.dark,
    //     color: theme.palette.getContrastText(theme.palette.primary.dark)
    // }
  }));
  

const HomeIndex = () => {
    //show post
    const [blogPosts, setBlogPosts] = useState([]);
   
    ///show tables
    const fetchBlogPosts = () => {
        apisauce.get('/posts').then((result) => {
            console.log('posts', result.data);
            setBlogPosts(result.data);
        });
    }
    useEffect(() => {
        fetchBlogPosts();
    }, []);

    const classes = useStyles();

    return(

        <div>

        <Header/>

        <Grid>
            <TableContainer 
            className={classes.tableContainer}
            component={Paper}
            >

            <Table 
            className={classes.table} 
            aria-label="simple table"
            >
                
            <TableHead>
                <TableRow>
                <TableCell  className={classes.tableHeadercell}               >Author</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Title</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Content</TableCell>
                </TableRow>
            </TableHead>
            {
                blogPosts.length != 0 ?
                blogPosts.map((data) => {
                   return (

                    <TableRow key={data.id}>
                        <TableCell component="th" scope="row">
                        {data.user_name}
                        </TableCell>
                        <TableCell align="center">{data.title}</TableCell>
                        <TableCell align="center">{data.body}</TableCell>
                        <Grid align="center"> 

                         </Grid>
                         
                    </TableRow>
                   ) 
                })
                : undefined
            }
    
            </Table>


            </TableContainer>
        </Grid>







        
        








            <Footer/>



      </div>

        


    )
}

export default HomeIndex;


const express = require("express");
const mongoose = require('mongoose');
const Article = require('./models/article');
const articleRouter = require('./routes/articles');
const methodOverride = require('method-override');
const app = express();

mongoose.connect('mongodb://localhost/blog', {useNewUrlParser: true, useUnifiedTopology: true});
const db = mongoose.connection;
app.set("view engine", "ejs");

app.use(express.urlencoded({extended: false}));
app.use(methodOverride('_method'));
app.use(express.json());

//Static files
app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/images', express.static(__dirname + 'public/images'));

app.get("/", async (req,res) => {
    const articles = await Article.find().sort({createdAt: 'desc'});
    res.render("articles/index" , { articles: articles});
});

app.post('/getArticles', async (req, res) => {
    let payload = req.body.payload.trim();
    let search = await Article.find({title: {$regex: new RegExp('.*'+payload+'.*', 'i')}}).exec();
    search = search.slice(0, 10);
    res.send({payload: search});
})

app.use('/articles', articleRouter);
app.listen(5000);



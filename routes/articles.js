const express = require('express');
const Article = require('./../models/article');
const router = express.Router();

router.get('/new', (req, res) => {
    res.render('articles/new', {article: new Article()});
});

router.get('/:slug', async (req, res) => {
    const article = await Article.findOne({slug: req.params.slug} );
    if(article == null) res.redirect('/');
    res.render('articles/show', {article: article});
});

router.post('/', async (req, res, next) => {
    req.article = new Article();
    next();
}, saveArticleAndRedirect('new'));

router.put('/:id', async (req, res, next) => {
    let article = await Article.findById(req.params.id);
    article.name = req.body.name;
    article.comment = req.body.comment;
    article = await article.save();
    res.redirect(`/articles/${article.slug}`);
});


function saveArticleAndRedirect(path){
    return async (req, res) => {
        let article = req.article;
        article.title = req.body.title;
        article.description = req.body.description;
        article.content = req.body.content;
        try {
            article = await article.save();
            res.redirect(`/articles/${article.slug}`);
        } catch(e) {
            res.render(`articles/${path}`, {article: article});
        } 
    }
}

router.delete('/:id', async (req, res) => {
    await Article.findByIdAndDelete(req.params.id);
    res.redirect('/');
})
module.exports = router;
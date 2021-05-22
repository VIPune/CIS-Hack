const express = require("express");

const path = require("path");

const app = express();

app.set('view engine', 'ejs');

const PORT = process.env.PORT || 3000;

app.use("views", express.static(path.join(__dirname, "views")));


// Static Middleware
app.use(express.static(path.join(__dirname, 'public')))


// local variables

app.locals.name = 'EduGain'


/* Pages */

//Home page
app.get("/", (req, res) => {
    res.render(path.join(__dirname, "views/main"));
  });

//blog page
app.get("/blog", (req, res) => {
    res.render(path.join(__dirname, "views/blog"));
  });

//Profile page
app.get("/profile", (req, res) => {
    res.render(path.join(__dirname, "views/profile"));
  });

//Upload page
app.get("/upload", (req, res) => {
    res.render(path.join(__dirname, "views/upload"));
  });

//Post page
app.get("/post", (req, res) => {
    const title = req.query.title;
    const addr = req.query.addr;
    res.render(path.join(__dirname, "views/post"), {"title":title,"addr":addr});
  });

//Contact page
app.get("/contact", (req, res) => {
    res.render(path.join(__dirname, "views/contact"));
  });

//file uploaded
app.get("/newpost", (req, res) => {
    res.render(path.join(__dirname, "views/post"));
});


app.listen(PORT, () => {
    console.log(`Your server is running on port: ${PORT}`);
  });
  
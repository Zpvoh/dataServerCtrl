var password="";
var key="";

function login() {
    password=getCookie("ps");
    key=getCookie("key");

    if(password=="" || key==""){
        password=$('#psTxt').val();
        key=$("#keyTxt").val();
    }

    $.post("fetchAllArticles.php", {
        password:password,
        key:key
    },function (data, status) {
        console.log(data);
        setCookie("ps", password, 1);
        setCookie("key", key, 1);

        if(data.charAt(0)=='['){
            var page=<ArticlePage/>;
            elementArr.push(page);
            elementArr.push(foot);
            ReactDOM.render(
                elementArr,
                document.getElementsByTagName("body")[0]
            );
        }else{
            alert(data);
        }

    });
}

function dele(e) {
    var deleId=e.target.name;

    $.post("deleteArticle.php", {
        password:password,
        key:key,
        id:deleId
    },function (data, status) {
        console.log(data);
        var name="#art"+deleId;
        $(name).fadeOut("slow");
    });
}

class Article extends React.Component{
    componentWillMount() {
        console.log('Component WILL MOUNT!')
    }
    componentDidMount() {
        console.log('Component DID MOUNT!')
    }
    componentWillReceiveProps(newProps) {
        console.log('Component WILL RECEIVE PROPS!')
    }
    shouldComponentUpdate(newProps, newState) {
        return true;
    }
    componentWillUpdate(nextProps, nextState) {
        console.log('Component WILL UPDATE!');
    }
    componentDidUpdate(prevProps, prevState) {
        console.log('Component DID UPDATE!')
    }
    componentWillUnmount() {
        console.log('Component WILL UNMOUNT!')
    }

    render() {
        return <div class="card">
                <h3 class="section">{this.props.title}</h3>
                <div class="section">{this.props.content}</div>
               </div>
    }

}

class VerifyDialog extends React.Component{
    render(){
        return <div><label htmlFor="modal-control">Verify your identity</label>
            <input type="checkbox" id="modal-control" className="modal"></input>
                <div>
                    <div className="card">
                        <label htmlFor="modal-control" className="modal-close"></label>
                        <h3 className="section">Verify</h3>
                        <p className="section">

                                <div>
                                    Password:
                                    <input type="password" name="password" id="psTxt"/>
                                </div>
                                <div>
                                    Key:
                                    <input type="password" name="key" id="keyTxt"/>
                                </div>
                                <input type="button" value="Login" id="loginBt"/>

                        </p>
                    </div>
                </div></div>;
    }
}

class ArticlePage extends React.Component{
    constructor(props){
        super(props);
        this.state={articleArray:[]};
    }

    componentWillMount() {
        console.log('Component WILL MOUNT!')
    }
    componentDidMount() {
        $.post("fetchAllArticles.php", {
            password:password,
            key:key
        }, function (data, status) {
            var json=JSON.parse(data);
            console.log(json);
            for(var i=0; i<json.length; i++) {
                var path="modify.php?id="+json[i]['id'];
                var deleId="deleteBt"+json[i]['id'];
                var artId="art"+json[i]['id'];
                var a=(<div class="card col-sm-3" id={artId}>
                    <h3 class="section"><a href={path}>{json[i]['title']}</a>
                        <img src="trash.svg" id={deleId} onClick={dele} class="deteleBt" name={json[i]['id']}/>
                    </h3>
                    <img src={json[i]['cover_img']}/>
                    <div class="section" dangerouslySetInnerHTML={{__html: json[i]['description']}}/>
                </div>);
                this.state.articleArray.push(a);
            }
            this.setState(this.state);
        }.bind(this));
        console.log('Component DID MOUNT!')
    }

    tick(){

    }
    componentWillReceiveProps(newProps) {
        console.log('Component WILL RECEIVE PROPS!')
    }
    shouldComponentUpdate(newProps, newState) {
        return true;
    }
    componentWillUpdate(nextProps, nextState) {
        console.log('Component WILL UPDATE!');
    }
    componentDidUpdate(prevProps, prevState) {
        console.log('Component DID UPDATE!')
    }
    componentWillUnmount() {
        clearInterval(this.timerID);
        console.log('Component WILL UNMOUNT!')
    }

    render() {
        return (<div class="row" id="page">{this.state.articleArray}</div>);
    }
}

var logo=<span class="logo">Gloomy</span>;
var article=<span class="button" id="articleEntrance">articles</span>;
var music=<span class="button">musics</span>;
var movie=<span class="button">movies</span>;

var headArr=[logo, article, music, movie];
var head=<header class="sticky">{headArr}</header>;
var dialog=<VerifyDialog/>
var foot=<footer class="sticky">2018-2020</footer>;

var elementArr=[head];

ReactDOM.render(
    dialog,
    document.getElementsByTagName("body")[0]
);

login();

$("#loginBt").click(login);


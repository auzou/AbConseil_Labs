<?php 
    require_once(dirname(__FILE__).'/head.php'); 
    require_once(dirname(__FILE__).'/menu.php');
    
?>
<div class="row container_documentation">
    <div class="col-sm-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <h2>Documentation</h2>
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                Base
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                Client
            </a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                EventManager
            </a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                CreateMessage
            </a>
        </div>
    </div>
    <div class="col-sm explanation">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="doc">
                    <p>BotCpp works with the Qt framework.</p>
                    <p>Any Qt application must instantiate the QApplication singleton by passing it argc/argv.</p>
                    <p>QCoreApplication is used by non-GUI applications to provide their event loop. For non-GUI application that uses Qt, there should be exactly one QCoreApplication object.</p>
                    <p>If QCoreApplication is not instantiated the botcpp library will not work</p>
                    <p>For more information -> <a href="https://doc.qt.io/qt-5/qcoreapplication.html">(QCoreApplication)</a></p>
                    <p><em>Example : </em><p>
                </div>
                <div class="code-area">
                <p><span class="preprocessor">#include</span> <span class="preprocessor-name">&lt;QCoreApplication&gt;</span> </p>
                <p><span class="type">int</span> <span class="object">main</span>(<span class="type">int</span> <span class="object-arg">argc</span>, <span class="type">char</span> *<span class="object-arg">argv</span>[])</p>
                <p> {</p> 
                <p> <span class="class">&emsp;QApplication</span> <span class="object">app</span>(<span class="object-arg">argc</span>,  <span class="object-arg">argv</span>);</p> 
                <p class="commentary">&emsp;// Your code</p>
                <p> &emsp;<span class="type">return</span> <span class="object">app</span>.<span class="method">exec</span>();</p> 
                <p> }</p> 
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                Empty section
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> 
                Empty section
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                 Empty section
            </div>
        </div>
    </div>
</div>
<style>
.container_documentation{
    padding: 0;
    margin: 0;
}
.container_documentation .explanation {
    padding-top: 1%;
    width: 100%;
}
.doc {
    font-family: cursive;
}
.code-area {
    border: 2px dotted;
    width: 30%; 
    padding-left: 5px; 
    padding-bottom: 5px; 
    padding-top: 10px;
}
.preprocessor {
    color: blue;
}
.preprocessor-name {
    color: green;
}
.type {
    color: orange;
}
.class {
    color: rgb(208, 0, 255);
}
.object {
    color: blue;
}
.object-arg {
    color: blue;
    font-style: italic;
}
.method {
    color: rgb(102, 102, 255);
}
.commentary {
    color: green;
}
</style>
<?php 
    require_once(dirname(__FILE__).'/footer.php'); 
?>
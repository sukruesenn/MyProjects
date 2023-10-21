'use strict';

        let gorevListesi = [];

        if(localStorage.getItem("gorevListesi") !== null){
            gorevListesi = JSON.parse(localStorage.getItem("gorevListesi"));
        }

        let ul = document.getElementById("task-list");
        let input = document.getElementById("txtTaskName");
        let btnClear = document.getElementById("btnClear");
        let editId;
        let isEditTask = false;
        let filters = document.querySelectorAll(".filters span");

        displayTasks("all");
        
        for (let span of filters){
            span.addEventListener("click", function(){
                document.querySelector("span.active").classList.remove("active");
                span.classList.add("active");
                displayTasks(span.id);
            })
        }

        function displayTasks(filter){
            ul.innerHTML = "";

            if(gorevListesi.length == 0){
                ul.innerHTML = `<p class="d-flex align-items-center justify-content-center my-3">Görev Listesi Boş.</p>`;
            }else{
                for (let gorev of gorevListesi){

                    let completed = gorev.durum == "completed" ? "checked": ""; 

                    if (filter == gorev.durum || filter == "all"){
                        let li = `
                            <li class="task list-group-item d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input onclick="updateStatus(this)" type="checkbox" id="${gorev.id}" class="form-check-input" ${completed}>
                                    <label for="${gorev.id}" class="form-check-label ${completed}">${gorev.gorevAdi}</label>
                                </div>
        
                                <div class="dropdown">
                                    <button class="btn btn-link text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a onclick="deleteTask(${gorev.id})" class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Sil</a></li>
                                        <li><a onclick='editTask(${gorev.id}, "${gorev.gorevAdi}")' class="dropdown-item" href="#"><i class="fa-solid fa-pen-to-square"></i> Düzenle</a></li>
                                    </ul>
                                </div>
                                
                            </li>
                        `;
                        ul.insertAdjacentHTML("beforeend", li);
                    }
                    
                }
            }
        }

        let ekleBtn = document.getElementById("btnAddNewTask");
        
        ekleBtn.addEventListener("click", newTask);
        ekleBtn.addEventListener("keypress", function(){
            if(event.key == "Enter"){
                ekleBtn.click();
            }
        });
        
        function newTask(event){
            if(input.value == ""){
                alert("Karakter giriniz!");
            }else{
                if(!isEditTask){
                    gorevListesi.push({"id": gorevListesi.length + 1, "gorevAdi": input.value, "durum": "pending"});
                }else{
                    for(let gorev of gorevListesi){
                        if(gorev.id == editId){
                            gorev.gorevAdi = input.value;
                        }
                        isEditTask = false;
                    }
                }
                input.value = "";
                displayTasks(document.querySelector("span.active").id);
                localStorage.setItem("gorevListesi", JSON.stringify(gorevListesi));
            }
            event.preventDefault();
        }
        
        function deleteTask(id){
            let deletedID;
            
            for (let index in gorevListesi){
                if(gorevListesi[index].id == id){
                    deletedID = index;
                }
            }

            gorevListesi.splice(deletedID, 1);
            displayTasks(document.querySelector("span.active").id);
            localStorage.setItem("gorevListesi", JSON.stringify(gorevListesi));
        }

        function editTask(taskId, taskName){
            editId = taskId;
            isEditTask = true;
            input.value = taskName;
            input.focus();
        }

        btnClear.addEventListener("click", function(){
            gorevListesi.splice(0, gorevListesi.length);
            localStorage.setItem("gorevListesi", JSON.stringify(gorevListesi));
            displayTasks("all");
        });

        function updateStatus(selectedTask){
            let label = selectedTask.nextElementSibling;
            let durum;
            
            if (selectedTask.checked){
                label.classList.add("checked");
                durum = "completed";
            }else{
                label.classList.remove("checked");
                durum = "pending";
            }

            for (let gorev of gorevListesi){
                if(gorev.id == selectedTask.id){
                    gorev.durum = durum;
                }
            }

            displayTasks(document.querySelector("span.active").id);

            localStorage.setItem("gorevListesi", JSON.stringify(gorevListesi));
        }
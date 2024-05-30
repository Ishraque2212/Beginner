<div class="col-md-5">
                <h3 class="mb-5 display-6">Contact</h3>
                <form action="http://localhost/ishraq/mailer/send.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label display-10">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label display-10">Subject</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label display-10">Describe</label>
                        <textarea class="form-control" id="desc" rows="3" name="message"
                            placeholder="Please describe your issue"></textarea>
                    </div>
                    <button type="submit" name="send" class="btn btn-dark btn-outline-light">Submit</button>
                </form>
            </div>
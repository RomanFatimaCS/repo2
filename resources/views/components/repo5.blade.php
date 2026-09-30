<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>

  <!-- ============================================
       SECTION 1: CSS STYLING START
       ============================================ -->
  <style>
    /* ---------- Reset ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    /* ---------- Body ---------- */
    body {
      background: linear-gradient(135deg, #e3f2fd, #bbdefb);
      min-height: 100vh;
      padding: 30px;
    }

    /* ---------- Container ---------- */
    .container {
      max-width: 950px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* ---------- Header ---------- */
    h1 {
      text-align: center;
      color: #1565c0;
      margin-bottom: 5px;
      font-size: 32px;
    }

    .subtitle {
      text-align: center;
      color: #888;
      font-size: 14px;
      margin-bottom: 25px;
    }

    /* ---------- Form ---------- */
    .form-box {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr auto;
      gap: 10px;
      margin-bottom: 20px;
    }

    .form-box input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .form-box button {
      padding: 10px 20px;
      background: #1565c0;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .form-box button:hover {
      background: #0d47a1;
    }

    /* ---------- Search ---------- */
    .search-box {
      margin-bottom: 15px;
    }

    .search-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    /* ---------- Table ---------- */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #1565c0;
      color: #fff;
    }

    tr:hover {
      background: #e3f2fd;
    }

    /* ---------- Buttons ---------- */
    .issue-btn {
      background: #43a047;
      color: #fff;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 5px;
    }

    .issue-btn:hover { background: #2e7d32; }

    .delete-btn {
      background: #e74c3c;
      color: #fff;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .delete-btn:hover { background: #c0392b; }

    /* ---------- Status ---------- */
    .available { color: #2e7d32; font-weight: bold; }
    .issued { color: #c62828; font-weight: bold; }

    /* ---------- Stats ---------- */
    .stats {
      display: flex;
      justify-content: space-around;
      margin-top: 25px;
      padding: 15px;
      background: #e3f2fd;
      border-radius: 8px;
    }

    .stats div { text-align: center; }

    .stats h3 {
      color: #1565c0;
      font-size: 24px;
    }

    .stats p {
      color: #666;
      font-size: 13px;
    }

    /* ---------- Footer ---------- */
    .footer {
      text-align: right;
      font-weight: bold;
      color: #1565c0;
      margin-top: 10px;
    }

    /* ---------- Members Section ---------- */
    .members-section {
      margin-top: 30px;
      padding-top: 25px;
      border-top: 2px dashed #bbdefb;
    }

    .members-section h2 {
      color: #1565c0;
      margin-bottom: 15px;
      font-size: 22px;
    }

    .member-input {
      display: grid;
      grid-template-columns: 1fr 1fr auto;
      gap: 10px;
      margin-bottom: 15px;
    }

    .member-input input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .member-input button {
      padding: 10px 20px;
      background: #6a1b9a;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .member-input button:hover {
      background: #4a148c;
    }

    .member-list {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .member-card {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 15px;
      background: #f3e5f5;
      border-left: 4px solid #6a1b9a;
      border-radius: 6px;
    }

    .member-card strong { color: #4a148c; }

    .member-card small {
      color: #777;
      margin-left: 8px;
    }

    .member-card button {
      background: #e74c3c;
      color: #fff;
      border: none;
      padding: 5px 12px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 12px;
    }

    .member-card button:hover {
      background: #c0392b;
    }
  </style>
  <!-- ============================================
       SECTION 1: CSS STYLING END
       ============================================ -->

</head>
<body>

  <!-- ============================================
       SECTION 2: MAIN CONTAINER START
       ============================================ -->
  <div class="container">

    <!-- SECTION 2.1: HEADER -->
    <h1>Library Management System</h1>
    <p class="subtitle">Student: Your Name | Reg No: 2022-GWG-1076</p>

    <!-- SECTION 2.2: ADD BOOK FORM -->
    <div class="form-box">
      <input type="text" id="bname" placeholder="Book Name">
      <input type="text" id="bauthor" placeholder="Author">
      <input type="text" id="bcat" placeholder="Category">
      <button onclick="addBook()">Add Book</button>
    </div>

    <!-- SECTION 2.3: SEARCH BOX -->
    <div class="search-box">
      <input type="text" id="search" placeholder="Search book..." oninput="searchBook()">
    </div>

    <!-- SECTION 2.4: BOOKS TABLE -->
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Book</th>
          <th>Author</th>
          <th>Category</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody"></tbody>
    </table>

    <!-- SECTION 2.5: TOTAL COUNT -->
    <p class="footer" id="total">Total Books: 0</p>

    <!-- SECTION 2.6: STATS BOX -->
    <div class="stats">
      <div>
        <h3 id="totalStat">0</h3>
        <p>Total Books</p>
      </div>
      <div>
        <h3 id="availStat">0</h3>
        <p>Available</p>
      </div>
      <div>
        <h3 id="issueStat">0</h3>
        <p>Issued</p>
      </div>
    </div>

    <!-- SECTION 2.7: MEMBERS SECTION -->
    <div class="members-section">
      <h2>Library Members</h2>

      <div class="member-input">
        <input type="text" id="memName" placeholder="Member Name">
        <input type="text" id="memReg" placeholder="Reg No (2022-GWG-1076)">
        <button onclick="addMember()">Add Member</button>
      </div>

      <div class="member-list" id="memberList"></div>
    </div>

  </div>

  <!-- ============================================
       SECTION 3: JAVASCRIPT START
       ============================================ -->
  <script>

    /* ---------- 3.1: Books Data ---------- */
    let books = [
      { name: "Clean Code", author: "Robert Martin", cat: "Programming", status: "Available" },
      { name: "Rich Dad Poor Dad", author: "Robert Kiyosaki", cat: "Finance", status: "Issued" },
      { name: "The Alchemist", author: "Paulo Coelho", cat: "Novel", status: "Available" }
    ];

    /* ---------- 3.2: Members Data ---------- */
    let members = [
      { name: "Ali Khan", reg: "2022-GWG-1076" },
      { name: "Sara Ahmed", reg: "2022-GWG-1088" }
    ];

    /* ---------- 3.3: Page Load ---------- */
    window.onload = function () {
      renderTable();
      renderMembers();
    };

    /* ---------- 3.4: Add Book ---------- */
    function addBook() {
      let name = document.getElementById("bname").value.trim();
      let author = document.getElementById("bauthor").value.trim();
      let cat = document.getElementById("bcat").value.trim();

      if (name === "" || author === "" || cat === "") {
        alert("Please fill all fields!");
        return;
      }

      books.push({ name: name, author: author, cat: cat, status: "Available" });

      document.getElementById("bname").value = "";
      document.getElementById("bauthor").value = "";
      document.getElementById("bcat").value = "";

      renderTable();
    }

    /* ---------- 3.5: Render Table ---------- */
    function renderTable() {
      let tbody = document.getElementById("tableBody");
      tbody.innerHTML = "";

      books.forEach((b, index) => {
        let statusClass = b.status === "Available" ? "available" : "issued";
        let row = `
          <tr>
            <td>${index + 1}</td>
            <td>${b.name}</td>
            <td>${b.author}</td>
            <td>${b.cat}</td>
            <td class="${statusClass}">${b.status}</td>
            <td>
              <button class="issue-btn" onclick="toggleStatus(${index})">Toggle</button>
              <button class="delete-btn" onclick="deleteBook(${index})">Delete</button>
            </td>
          </tr>
        `;
        tbody.innerHTML += row;
      });

      document.getElementById("total").innerText = "Total Books: " + books.length;
      updateStats();
    }

    /* ---------- 3.6: Toggle Status ---------- */
    function toggleStatus(index) {
      books[index].status = books[index].status === "Available" ? "Issued" : "Available";
      renderTable();
    }

    /* ---------- 3.7: Delete Book ---------- */
    function deleteBook(index) {
      if (confirm("Delete this book?")) {
        books.splice(index, 1);
        renderTable();
      }
    }

    /* ---------- 3.8: Search ---------- */
    function searchBook() {
      let query = document.getElementById("search").value.toLowerCase();
      let rows = document.querySelectorAll("#tableBody tr");

      rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(query) ? "" : "none";
      });
    }

    /* ---------- 3.9: Update Stats ---------- */
  
    }

    /* ---------- 3.10: Render Members ---------- */
    function renderMembers() {
      let list = document.getElementById("memberList");
      list.innerHTML = "";

      if (members.length === 0) {
        list.innerHTML = "<p style='color:#888;'>No members added yet.</p>";
        return;
      }

      members.forEach((m, index) => {
        let card = `
          <div class="member-card">
            <div>
              <strong>${m.name}</strong>
              <small>${m.reg}</small>
            </div>
            <button onclick="deleteMember(${index})">Remove</button>
          </div>
        `;
        list.innerHTML += card;
      });
    }
        function deleteBook(index) {
      ...
    }
        <!-- Members Section HTML -->   ← ye yahan nahi hona chahiye
    <div class="members-section">

    /* ---------- 3.11: Add Member ---------- */
    function addMember() {
      let name = document.getElementById("memName").value.trim();
      let reg = document.getElementById("memReg").value.trim();

      if (name === "" || reg === "") {
        alert("Please fill both fields!");
        return;
      }

      members.push({ name: name, reg: reg });

      document.getElementById("memName").value = "";
      document.getElementById("memReg").value = "";

      renderMembers();
    }

    /* ---------- 3.12: Delete Member ---------- */
    function deleteMember(index) {
      if (confirm("Remove this member?")) {
        members.splice(index, 1);
        renderMembers();
      }
    }

    /* ---------- 3.13: Console Info ---------- */
    

  </script>

</body>
</html>
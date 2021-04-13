import urbackup_api
server = urbackup_api.urbackup_server("http://127.0.0.1:55414/x", "<user>", "<password>")
clients = server.get_status()
fail = False
for client in clients:
    if not client["file_ok"]:
        fail = True

if fail:
    print("Fail")
else:
    print("OK")

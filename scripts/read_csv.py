import csv
import json

path = """D:\\workspace\\Prototype-User-Name\\code\\resources\\data\\names.csv"""
toPath = """D:\\workspace\\Prototype-User-Name\\code\\resources\\data\\names.json"""
def main():
    global path
    found = []

    with open(path, encoding='UTF-8') as csv_file:

        csv_reader = csv.reader(csv_file, delimiter=';')
        line_count = 0

        for row in csv_reader:
            found.append( row[0] )
            pass
    pass

    save_as = {
        "people_first_names": found
    }

    json_obj = json.dumps(save_as, indent=4)

    with open(toPath, "w", encoding='UTF-8') as output:
        output.write(json_obj)


if __name__ == "__main__":
    main()
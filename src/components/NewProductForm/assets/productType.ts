export default interface ProductTypeInteface {
  name: string,
  description: string,
  customFields: Array<customFieldInterface>
}

interface customFieldInterface {
  fieldTitile: string,
  fieldId: string
}
import { IEventSystem } from "../../../ts-common/events";
import { IDataCollection } from "../../../ts-data";
export interface IData {
    [key: string]: any;
}
export interface IPropertyConfig {
    id?: string;
    type?: string;
    title?: string;
}
export interface CustomEvent extends Event {
    target: HTMLElement;
    srcElement: HTMLElement;
}
export interface IProperty {
    events: IEventSystem<PropertyEvents>;
    data: IDataCollection;
    clear(): any;
    getValues(): any;
    setValues(data: IData): any;
    paint(): any;
    isItemSelected(id: string): boolean;
    isItemsSelected(): boolean;
    selectItem(id: string): any;
}
export declare enum PropertyEvents {
    change = "change",
    beforeFileUpload = "onBeforeFileUpload",
    afterFileUpload = "afterFileUpload"
}
